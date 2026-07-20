<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdExtensionMultiStatusResponseWithPartialErrors;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdExtensionSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateAdExtensionRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryAdExtensionRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateAdExtensionRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all AdExtensions operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag AdExtensions.
 */
final class AdExtensionsApi extends AbstractApi
{
    /**
     * Create ad extensions - API is in open beta.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param CreateAdExtensionRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdExtensionMultiStatusResponseWithPartialErrors> Hydrated successful response.
     */
    public function createAdExtension(
        CreateAdExtensionRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/create/adExtensions',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdExtensionMultiStatusResponseWithPartialErrors::class,
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
     * Query ad extension - API is in open beta.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryAdExtensionRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdExtensionSuccessResponse> Hydrated successful response.
     */
    public function queryAdExtension(
        QueryAdExtensionRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/adExtensions',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => AdExtensionSuccessResponse::class,
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
     * Update ad extension - API is in open beta.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateAdExtensionRequest|array<string, mixed> $request Operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AdExtensionMultiStatusResponseWithPartialErrors> Hydrated successful response.
     */
    public function updateAdExtension(
        UpdateAdExtensionRequest|array $request,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/adExtensions',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AdExtensionMultiStatusResponseWithPartialErrors::class,
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
