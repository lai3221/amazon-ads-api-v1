<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Http;

use Closure;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\TransferException;
use JsonException;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Auth\AccessTokenProvider;
use Lai3221\AmazonAdsApiV1\Contracts\OpenApiModel;
use Lai3221\AmazonAdsApiV1\Contracts\Transport;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Exception\ApiException;
use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;
use Lai3221\AmazonAdsApiV1\Exception\NetworkException;
use Lai3221\AmazonAdsApiV1\RequestContext;
use Lai3221\AmazonAdsApiV1\SdkConfiguration;
use Lai3221\AmazonAdsApiV1\Support\Serializer;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Throwable;

/**
 * Sends authenticated requests to the regional Amazon Ads API endpoint.
 */
final class HttpTransport implements Transport
{
    /**
     * HTTP status codes that are safe to retry with backoff.
     *
     * @var list<int>
     */
    private const RETRYABLE_STATUS_CODES = [408, 429, 500, 502, 503, 504];

    private readonly Closure $sleeper;

    /**
     * Creates an authenticated HTTP transport.
     *
     * @param callable(int): void|null $sleeper Receives a delay in microseconds, primarily for testing.
     */
    public function __construct(
        private readonly ClientInterface $http,
        private readonly AccessTokenProvider $tokens,
        private readonly Credentials $credentials,
        private readonly SdkConfiguration $configuration,
        private readonly Serializer $serializer = new Serializer(),
        private readonly LoggerInterface $logger = new NullLogger(),
        ?callable $sleeper = null,
    ) {
        $this->sleeper = $sleeper === null
            ? static function (int $microseconds): void {
                usleep($microseconds);
            }
        : Closure::fromCallable($sleeper);
    }

    /**
     * Sends an operation and returns its hydrated response.
     *
     * @param array<string, mixed> $query Query string values keyed by API parameter name.
     * @param list<string> $requiredHeaders Headers required by the OpenAPI operation.
     * @param array<int|string, class-string|null> $responseTypes Response models keyed by HTTP status.
     * @return ApiResponse<mixed>
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        mixed $body = null,
        ?RequestContext $context = null,
        array $requiredHeaders = [],
        array $responseTypes = [],
    ): ApiResponse {
        if ($body instanceof OpenApiModel) {
            $body->validate();
        }

        $headers = $this->resolveHeaders($context, $requiredHeaders, $body !== null);
        $options = [
            'allow_redirects' => false,
            'connect_timeout' => $this->configuration->connectTimeout,
            'headers' => $headers,
            'http_errors' => false,
            'query' => $this->serializer->normalize(array_filter(
                $query,
                static fn (mixed $value): bool => $value !== null,
            )),
            'timeout' => $this->configuration->timeout,
        ];

        if ($body !== null) {
            $options['json'] = $this->serializer->normalize($body);
        }

        $url = rtrim($this->configuration->region->endpoint(), '/') . '/' . ltrim($path, '/');
        $response = $this->sendWithRetries(strtoupper($method), $url, $options);

        return $this->createResponse($response, $responseTypes);
    }

    /**
     * Resolves authorization and account context headers for an operation.
     *
     * @param list<string> $requiredHeaders Headers required by the OpenAPI operation.
     * @return array<string, string>
     */
    private function resolveHeaders(?RequestContext $context, array $requiredHeaders, bool $hasBody): array
    {
        $resolvedContext = $this->configuration->defaultContext->overlay($context);
        $contextHeaders = $resolvedContext->toHeaders();

        foreach ($contextHeaders as $name => $value) {
            if (in_array(strtolower($name), ['authorization', 'amazon-ads-clientid'], true)) {
                throw new ConfigurationException(sprintf('The protected header %s cannot be overridden.', $name));
            }

            if (!is_string($value)) {
                throw new ConfigurationException(sprintf('The request header %s must contain a string value.', $name));
            }
        }

        $headers = array_merge($contextHeaders, [
            'Accept' => 'application/json',
            'Amazon-Ads-ClientId' => $this->credentials->clientId,
            'Authorization' => 'Bearer ' . $this->tokens->accessToken(),
            'User-Agent' => $this->configuration->userAgent,
        ]);

        if ($hasBody) {
            $headers['Content-Type'] = 'application/json';
        }

        $lowercaseHeaders = array_change_key_case($headers, CASE_LOWER);
        foreach ($requiredHeaders as $requiredHeader) {
            $value = $lowercaseHeaders[strtolower($requiredHeader)] ?? null;
            if (!is_string($value) || trim($value) === '') {
                throw new ConfigurationException(sprintf(
                    'Operation requires the %s header. Configure a default value or pass RequestContext.',
                    $requiredHeader,
                ));
            }
        }

        return $headers;
    }

    /**
     * Sends an HTTP request and retries transient network and service failures.
     *
     * @param array<string, mixed> $options Guzzle request options.
     */
    private function sendWithRetries(string $method, string $url, array $options): ResponseInterface
    {
        $attempt = 0;

        while (true) {
            try {
                $response = $this->http->request($method, $url, $options);
            } catch (TransferException $exception) {
                if ($attempt >= $this->configuration->maxRetries) {
                    throw new NetworkException(
                        'Amazon Ads API request failed after all retry attempts.',
                        previous: $exception,
                    );
                }

                $this->sleepBeforeRetry($attempt, null);
                $attempt++;

                continue;
            } catch (Throwable $exception) {
                throw new NetworkException('Amazon Ads API request failed before receiving a response.', previous: $exception);
            }

            if (
                !in_array($response->getStatusCode(), self::RETRYABLE_STATUS_CODES, true)
                || $attempt >= $this->configuration->maxRetries
            ) {
                return $response;
            }

            $this->logger->warning('Retrying a transient Amazon Ads API response.', [
                'attempt' => $attempt + 1,
                'status_code' => $response->getStatusCode(),
            ]);

            $this->sleepBeforeRetry($attempt, $response);
            $attempt++;
        }
    }

    /**
     * Waits according to Retry-After or exponential backoff with jitter.
     */
    private function sleepBeforeRetry(int $attempt, ?ResponseInterface $response): void
    {
        $retryAfter = $response?->getHeaderLine('Retry-After');
        if ($retryAfter !== null && ctype_digit($retryAfter)) {
            ($this->sleeper)((int) $retryAfter * 1_000_000);

            return;
        }

        $base = $this->configuration->retryBaseDelayMilliseconds;
        $jitter = $base > 0 ? random_int(0, $base) : 0;
        $milliseconds = ($base * (2 ** $attempt)) + $jitter;

        ($this->sleeper)($milliseconds * 1000);
    }

    /**
     * Decodes and hydrates an HTTP response according to generated response metadata.
     *
     * @param array<int|string, class-string|null> $responseTypes Response models keyed by HTTP status.
     * @return ApiResponse<mixed>
     */
    private function createResponse(ResponseInterface $response, array $responseTypes): ApiResponse
    {
        $statusCode = $response->getStatusCode();
        $headers = $response->getHeaders();
        $requestId = $response->getHeaderLine('Amazon-Advertising-API-RequestId') ?: null;
        $decoded = $this->decodeResponseBody($response);
        $responseType = $responseTypes[$statusCode] ?? $responseTypes['default'] ?? null;
        $body = $this->serializer->hydrate($decoded, $responseType);

        if ($statusCode < 200 || $statusCode >= 300) {
            throw new ApiException(
                message: $this->errorMessage($statusCode, $decoded),
                statusCode: $statusCode,
                responseBody: $body,
                headers: $headers,
                requestId: $requestId,
            );
        }

        return new ApiResponse(
            statusCode: $statusCode,
            body: $body,
            headers: $headers,
            requestId: $requestId,
        );
    }

    /**
     * Decodes a JSON response while retaining non-JSON bodies as strings.
     */
    private function decodeResponseBody(ResponseInterface $response): mixed
    {
        $contents = (string) $response->getBody();
        if ($contents === '') {
            return null;
        }

        $contentType = strtolower($response->getHeaderLine('Content-Type'));
        if (!str_contains($contentType, 'json')) {
            return $contents;
        }

        try {
            return json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            return $contents;
        }
    }

    /**
     * Builds a concise exception message from a decoded Amazon error response.
     */
    private function errorMessage(int $statusCode, mixed $body): string
    {
        if (is_array($body)) {
            foreach (['message', 'error_description', 'details', 'code'] as $key) {
                if (is_string($body[$key] ?? null) && $body[$key] !== '') {
                    return sprintf('Amazon Ads API returned HTTP %d: %s', $statusCode, $body[$key]);
                }
            }
        }

        return sprintf('Amazon Ads API returned HTTP %d.', $statusCode);
    }
}
