<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BrandStoreEditionSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all BrandStoreEditions operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag BrandStoreEditions.
 */
final class BrandStoreEditionsApi extends AbstractApi
{
    /**
     * Retrieve brand store page content.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId, Amazon-Advertising-API-Scope.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param string $brandStoreId The brandStoreId query parameter.
     * @param string|null $nextToken The nextToken query parameter.
     * @param int|null $maxResults The maxResults query parameter.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<BrandStoreEditionSuccessResponse> Hydrated successful response.
     */
    public function listBrandStoreEdition(
        string $brandStoreId,
        string|null $nextToken = null,
        int|null $maxResults = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'GET',
            path: '/adsApi/v1/brandStoreEditions',
            query: [
                'brandStoreId' => $brandStoreId,
                'nextToken' => $nextToken,
                'maxResults' => $maxResults,
            ],
            body: null,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
                'Amazon-Advertising-API-Scope',
            ],
            responseTypes: [
                '200' => BrandStoreEditionSuccessResponse::class,
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
