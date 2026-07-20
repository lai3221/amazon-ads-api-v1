<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Contracts;

use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Sends one generated Amazon Ads API operation.
 */
interface Transport
{
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
    ): ApiResponse;
}
