<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStoreSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryBrandStoreRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all BrandStores operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag BrandStores.
 */
final class BrandStoresApi extends AbstractApi
{
    /**
     * Query brand store content.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryBrandStoreRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStoreSuccessResponse> Hydrated successful response.
     */
    public function queryBrandStore(
        QueryBrandStoreRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/brandStores',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => BrandStoreSuccessResponse::class,
                '400' => BadRequestResponseContent::class,
                '401' => UnauthorizedResponseContent::class,
                '403' => ForbiddenResponseContent::class,
                '404' => NotFoundResponseContent::class,
                '413' => ContentTooLargeResponseContent::class,
                '429' => TooManyRequestsResponseContent::class,
                '500' => InternalServerErrorResponseContent::class,
                '502' => BadGatewayResponseContent::class,
                '503' => ServiceUnavailableErrorResponseContent::class,
                '504' => GatewayTimeoutResponseContent::class,
            ],
        );
    }
}
