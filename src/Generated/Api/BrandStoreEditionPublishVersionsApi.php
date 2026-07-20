<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStoreEditionPublishVersionMultiStatusResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStoreEditionPublishVersionSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryBrandStoreEditionPublishVersionRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateBrandStoreEditionPublishVersionRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all BrandStoreEditionPublishVersions operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag BrandStoreEditionPublishVersions.
 */
final class BrandStoreEditionPublishVersionsApi extends AbstractApi
{
    /**
     * Query store edition publish versions.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId, Amazon-Advertising-API-Scope.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryBrandStoreEditionPublishVersionRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStoreEditionPublishVersionSuccessResponse> Hydrated successful response.
     */
    public function queryBrandStoreEditionPublishVersion(
        QueryBrandStoreEditionPublishVersionRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/brandStoreEditionPublishVersions',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
                'Amazon-Advertising-API-Scope',
            ],
            responseTypes: [
                '200' => BrandStoreEditionPublishVersionSuccessResponse::class,
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
     * Update store edition publish versions.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId, Amazon-Advertising-API-Scope.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateBrandStoreEditionPublishVersionRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStoreEditionPublishVersionMultiStatusResponse> Hydrated successful response.
     */
    public function updateBrandStoreEditionPublishVersion(
        UpdateBrandStoreEditionPublishVersionRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/brandStoreEditionPublishVersions',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
                'Amazon-Advertising-API-Scope',
            ],
            responseTypes: [
                '207' => BrandStoreEditionPublishVersionMultiStatusResponse::class,
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
