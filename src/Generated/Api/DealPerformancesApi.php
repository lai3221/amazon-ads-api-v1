<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdProduct;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\DealPerformanceSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all DealPerformances operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag DealPerformances.
 */
final class DealPerformancesApi extends AbstractApi
{
    /**
     * Retrieve performance metrics for each specified deal.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param AdProduct|string $adProduct AdProduct Enum: AdProduct Description --- --- AMAZON DSP Amazon Demand-Side Platform ad product.
     * @param string $advertisingDealId The advertisingDealId query parameter.
     * @param \DateTimeInterface|string|null $performanceEndDate The performanceEndDate query parameter.
     * @param \DateTimeInterface|string|null $performanceStartDate The performanceStartDate query parameter.
     * @param string|null $nextToken The nextToken query parameter.
     * @param int|null $maxResults The maxResults query parameter.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<DealPerformanceSuccessResponse> Hydrated successful response.
     */
    public function listDealPerformance(
        AdProduct|string $adProduct,
        string $advertisingDealId,
        \DateTimeInterface|string|null $performanceEndDate = null,
        \DateTimeInterface|string|null $performanceStartDate = null,
        string|null $nextToken = null,
        int|null $maxResults = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'GET',
            path: '/adsApi/v1/dealPerformances',
            query: [
                'adProduct' => $adProduct,
                'advertisingDealId' => $advertisingDealId,
                'performanceEndDate' => $performanceEndDate,
                'performanceStartDate' => $performanceStartDate,
                'nextToken' => $nextToken,
                'maxResults' => $maxResults,
            ],
            body: null,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => DealPerformanceSuccessResponse::class,
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
