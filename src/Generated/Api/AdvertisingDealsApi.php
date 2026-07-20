<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdvertisingDealMultiStatusResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdvertisingDealSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateAdvertisingDealRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryAdvertisingDealRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateAdvertisingDealRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all AdvertisingDeals operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag AdvertisingDeals.
 */
final class AdvertisingDealsApi extends AbstractApi
{
    /**
     * Create advertising deals.
     *
     * Required OpenAPI headers: Amazon-Ads-AccountId, Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param CreateAdvertisingDealRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdvertisingDealMultiStatusResponse> Hydrated successful response.
     */
    public function createAdvertisingDeal(
        CreateAdvertisingDealRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/create/advertisingDeals',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-AccountId',
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdvertisingDealMultiStatusResponse::class,
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
     * Query advertising deals with filters.
     *
     * Required OpenAPI headers: Amazon-Ads-AccountId, Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryAdvertisingDealRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdvertisingDealSuccessResponse> Hydrated successful response.
     */
    public function queryAdvertisingDeal(
        QueryAdvertisingDealRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/advertisingDeals',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-AccountId',
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => AdvertisingDealSuccessResponse::class,
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
     * Update advertising deals.
     *
     * Required OpenAPI headers: Amazon-Ads-AccountId, Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateAdvertisingDealRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdvertisingDealMultiStatusResponse> Hydrated successful response.
     */
    public function updateAdvertisingDeal(
        UpdateAdvertisingDealRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/advertisingDeals',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-AccountId',
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdvertisingDealMultiStatusResponse::class,
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
