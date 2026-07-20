<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdGroupMultiStatusResponseWithPartialErrors;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdGroupSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateAdGroupRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\DeleteAdGroupRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryAdGroupRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateAdGroupRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all AdGroups operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag AdGroups.
 */
final class AdGroupsApi extends AbstractApi
{
    /**
     * Create ad groups.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param CreateAdGroupRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdGroupMultiStatusResponseWithPartialErrors> Hydrated successful response.
     */
    public function createAdGroup(
        CreateAdGroupRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/create/adGroups',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdGroupMultiStatusResponseWithPartialErrors::class,
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
     * Delete ad groups.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param DeleteAdGroupRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdGroupMultiStatusResponseWithPartialErrors> Hydrated successful response.
     */
    public function deleteAdGroup(
        DeleteAdGroupRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/delete/adGroups',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdGroupMultiStatusResponseWithPartialErrors::class,
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
     * List ad groups.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryAdGroupRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdGroupSuccessResponse> Hydrated successful response.
     */
    public function queryAdGroup(
        QueryAdGroupRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/adGroups',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => AdGroupSuccessResponse::class,
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
     * Update ad groups.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateAdGroupRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdGroupMultiStatusResponseWithPartialErrors> Hydrated successful response.
     */
    public function updateAdGroup(
        UpdateAdGroupRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/adGroups',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdGroupMultiStatusResponseWithPartialErrors::class,
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
