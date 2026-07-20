<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Unit;

use ArrayObject;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Lai3221\AmazonAdsApiV1\AmazonAdsClient;
use Lai3221\AmazonAdsApiV1\Auth\StaticAccessTokenProvider;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Exception\ApiException;
use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\CampaignSuccessResponse;
use Lai3221\AmazonAdsApiV1\Http\HttpTransport;
use Lai3221\AmazonAdsApiV1\RequestContext;
use Lai3221\AmazonAdsApiV1\SdkConfiguration;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * Verifies authenticated HTTP requests, response hydration, errors, and retries.
 */
final class HttpTransportTest extends TestCase
{
    /**
     * Confirms generated operations send authentication headers and hydrate success models.
     */
    #[Test]
    public function itSendsAGeneratedOperationAndHydratesTheResponse(): void
    {
        $history = $this->history();
        $client = $this->client(
            responses: [new Response(200, ['Content-Type' => 'application/json'], '{}')],
            history: $history,
        );

        $response = $client->campaigns()->queryCampaign([]);
        $request = $this->capturedRequest($history, 0);

        self::assertInstanceOf(CampaignSuccessResponse::class, $response->body);
        self::assertCount(1, $history);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/adsApi/v1/query/campaigns', $request->getUri()->getPath());
        self::assertSame('test-client-id', $request->getHeaderLine('Amazon-Ads-ClientId'));
        self::assertSame('Bearer test-access-token', $request->getHeaderLine('Authorization'));
    }

    /**
     * Confirms generated required account headers fail before sending a request.
     */
    #[Test]
    public function itRejectsAMissingRequiredAccountHeader(): void
    {
        $history = $this->history();
        $client = $this->client(
            responses: [new Response(207, ['Content-Type' => 'application/json'], '{}')],
            history: $history,
        );

        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage('Amazon-Ads-AccountId');

        $client->advertisingDeals()->createAdvertisingDeal([]);
    }

    /**
     * Confirms per-call request context supplies operation-specific headers.
     */
    #[Test]
    public function itAppliesAPerCallRequestContext(): void
    {
        $history = $this->history();
        $client = $this->client(
            responses: [new Response(207, ['Content-Type' => 'application/json'], '{}')],
            history: $history,
        );

        $client->advertisingDeals()->createAdvertisingDeal(
            request: [],
            context: new RequestContext(accountId: 'account-123'),
        );

        self::assertSame(
            'account-123',
            $this->capturedRequest($history, 0)->getHeaderLine('Amazon-Ads-AccountId'),
        );
    }

    /**
     * Confirms non-successful JSON responses hydrate their generated error models.
     */
    #[Test]
    public function itThrowsATypedApiException(): void
    {
        $history = $this->history();
        $client = $this->client(
            responses: [new Response(
                400,
                [
                    'Content-Type' => 'application/json',
                    'Amazon-Advertising-API-RequestId' => 'request-123',
                ],
                '{"message":"Invalid request"}',
            )],
            history: $history,
        );

        try {
            $client->campaigns()->queryCampaign([]);
            self::fail('Expected ApiException was not thrown.');
        } catch (ApiException $exception) {
            self::assertSame(400, $exception->statusCode);
            self::assertSame('request-123', $exception->requestId);
            self::assertInstanceOf(BadRequestResponseContent::class, $exception->responseBody);
            self::assertSame('Invalid request', $exception->responseBody->getMessage());
        }
    }

    /**
     * Confirms a transient throttling response is retried once.
     */
    #[Test]
    public function itRetriesATransientResponse(): void
    {
        $history = $this->history();
        $delays = [];
        $client = $this->client(
            responses: [
                new Response(429, ['Retry-After' => '0', 'Content-Type' => 'application/json'], '{}'),
                new Response(200, ['Content-Type' => 'application/json'], '{}'),
            ],
            history: $history,
            maxRetries: 1,
            sleeper: static function (int $microseconds) use (&$delays): void {
                $delays[] = $microseconds;
            },
        );

        $response = $client->campaigns()->queryCampaign([]);

        self::assertSame(200, $response->statusCode);
        self::assertCount(2, $history);
        self::assertSame([0], $delays);
    }

    /**
     * Creates an SDK client backed by Guzzle's deterministic mock handler.
     *
     * @param list<Response> $responses Mock HTTP responses.
     * @param ArrayObject<int, array<array-key, mixed>> $history Captured Guzzle request history.
     * @param callable(int): void|null $sleeper Optional retry delay callback.
     */
    private function client(
        array $responses,
        ArrayObject $history,
        int $maxRetries = 0,
        ?callable $sleeper = null,
    ): AmazonAdsClient {
        $handler = new MockHandler($responses);
        $stack = HandlerStack::create($handler);
        $stack->push(Middleware::history($history));
        $http = new Client(['handler' => $stack]);
        $credentials = new Credentials('test-client-id');

        return new AmazonAdsClient(new HttpTransport(
            http: $http,
            tokens: new StaticAccessTokenProvider('test-access-token'),
            credentials: $credentials,
            configuration: new SdkConfiguration(
                maxRetries: $maxRetries,
                retryBaseDelayMilliseconds: 0,
            ),
            sleeper: $sleeper,
        ));
    }

    /**
     * Creates a typed mutable container for Guzzle request history.
     *
     * @return ArrayObject<int, array<array-key, mixed>>
     */
    private function history(): ArrayObject
    {
        return new ArrayObject();
    }

    /**
     * Returns one captured request after validating Guzzle's history record shape.
     *
     * @param ArrayObject<int, array<array-key, mixed>> $history Captured Guzzle request history.
     */
    private function capturedRequest(ArrayObject $history, int $index): RequestInterface
    {
        $entry = $history[$index] ?? null;
        $request = is_array($entry) ? ($entry['request'] ?? null) : null;

        if (!$request instanceof RequestInterface) {
            self::fail(sprintf('Expected Guzzle history entry %d to contain a request.', $index));
        }

        return $request;
    }
}
