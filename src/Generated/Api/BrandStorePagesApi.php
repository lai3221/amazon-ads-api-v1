<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStorePageMultiStatusResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStorePageSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryBrandStorePageRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateBrandStorePageRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all BrandStorePages operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag BrandStorePages.
 */
final class BrandStorePagesApi extends AbstractApi
{
    /**
     * Retrieve brand store page content.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId, Amazon-Advertising-API-Scope.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryBrandStorePageRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStorePageSuccessResponse> Hydrated successful response.
     */
    public function queryBrandStorePage(
        QueryBrandStorePageRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/brandStorePages',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
                'Amazon-Advertising-API-Scope',
            ],
            responseTypes: [
                '200' => BrandStorePageSuccessResponse::class,
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

    /**
     * Update brand store page content.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId, Amazon-Advertising-API-Scope.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateBrandStorePageRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStorePageMultiStatusResponse> Hydrated successful response.
     */
    public function updateBrandStorePage(
        UpdateBrandStorePageRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/brandStorePages',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
                'Amazon-Advertising-API-Scope',
            ],
            responseTypes: [
                '207' => BrandStorePageMultiStatusResponse::class,
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
