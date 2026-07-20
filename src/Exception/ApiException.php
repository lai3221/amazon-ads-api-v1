<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Exception;

/**
 * Reports a non-successful response returned by the Amazon Ads API.
 */
final class ApiException extends AmazonAdsException
{
    /**
     * Creates an exception from a failed Amazon Ads API response.
     *
     * @param array<string, array<string>> $headers Response headers.
     */
    public function __construct(
        string $message,
        public readonly int $statusCode,
        public readonly mixed $responseBody,
        public readonly array $headers,
        public readonly ?string $requestId = null,
    ) {
        parent::__construct($message, $statusCode);
    }

    /**
     * Determines whether Amazon rejected the request because of rate limiting.
     */
    public function isRateLimited(): bool
    {
        return $this->statusCode === 429;
    }

    /**
     * Returns the Retry-After header value in seconds when it is numeric.
     */
    public function retryAfterSeconds(): ?int
    {
        $value = $this->headers['Retry-After'][0] ?? $this->headers['retry-after'][0] ?? null;

        return is_string($value) && ctype_digit($value) ? (int) $value : null;
    }
}
