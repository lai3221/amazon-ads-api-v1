<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\Contracts\Transport;
use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;
use Lai3221\AmazonAdsApiV1\Generated\Concerns\HasGeneratedApis;

/**
 * Serves as the main entry point for all generated Amazon Ads API v1 resources.
 */
final class AmazonAdsClient
{
    use HasGeneratedApis;

    /**
     * Resolved resource API instances keyed by generated class name.
     *
     * @var array<class-string<AbstractApi>, AbstractApi>
     */
    private array $apis = [];

    /**
     * Creates the SDK client with an authenticated transport.
     */
    public function __construct(private readonly Transport $transport)
    {
    }

    /**
     * Returns a generated resource API by its fully qualified class name.
     *
     * @template TApi of AbstractApi
     * @param class-string<TApi> $apiClass Generated resource API class.
     * @return TApi
     */
    public function api(string $apiClass): AbstractApi
    {
        if (!is_subclass_of($apiClass, AbstractApi::class)) {
            throw new ConfigurationException(sprintf('%s is not a generated Amazon Ads API class.', $apiClass));
        }

        if (!isset($this->apis[$apiClass])) {
            $this->apis[$apiClass] = new $apiClass($this->transport);
        }

        /** @var TApi $api */
        $api = $this->apis[$apiClass];

        return $api;
    }

    /**
     * Sends a raw operation for forward compatibility with newly released endpoints.
     *
     * @param array<string, mixed> $query Query string values keyed by API parameter name.
     * @param list<string> $requiredHeaders Required operation header names.
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
        return $this->transport->request(
            method: $method,
            path: $path,
            query: $query,
            body: $body,
            context: $context,
            requiredHeaders: $requiredHeaders,
            responseTypes: $responseTypes,
        );
    }

    /**
     * Returns the configured transport for advanced integration scenarios.
     */
    public function transport(): Transport
    {
        return $this->transport;
    }
}
