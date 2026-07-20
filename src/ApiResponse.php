<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

/**
 * Contains a successful HTTP response and its hydrated response body.
 *
 * @template TBody
 */
final readonly class ApiResponse
{
    /**
     * Creates an immutable API response.
     *
     * @param TBody $body Hydrated response body.
     * @param array<string, array<string>> $headers Response headers.
     */
    public function __construct(
        public int $statusCode,
        public mixed $body,
        public array $headers,
        public ?string $requestId = null,
    ) {
    }
}
