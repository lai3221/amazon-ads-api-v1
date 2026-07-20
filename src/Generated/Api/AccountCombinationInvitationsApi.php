<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;
use Lai3221\AmazonAdsApiV1\ApiResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AccountCombinationInvitationMultiStatusResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\AccountCombinationInvitationSuccessResponse;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadGatewayResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\BadRequestResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\ContentTooLargeResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateAccountCombinationInvitationRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ForbiddenResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\GatewayTimeoutResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\InternalServerErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\NotFoundResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\QueryAccountCombinationInvitationRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\ServiceUnavailableErrorResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\TooManyRequestsResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UnauthorizedResponseContent;
use Lai3221\AmazonAdsApiV1\Generated\Model\UpdateAccountCombinationInvitationRequest;
use Lai3221\AmazonAdsApiV1\RequestContext;

/**
 * Provides all AccountCombinationInvitations operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag AccountCombinationInvitations.
 */
final class AccountCombinationInvitationsApi extends AbstractApi
{
    /**
     * Create an invitation to combine Advertising Accounts under a Single Global Account. Currently supports combining a Global SA account with one or more DSP Accounts.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param CreateAccountCombinationInvitationRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AccountCombinationInvitationMultiStatusResponse> Hydrated successful response.
     */
    public function createAccountCombinationInvitation(
        CreateAccountCombinationInvitationRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/create/accountCombinationInvitations',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AccountCombinationInvitationMultiStatusResponse::class,
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
     * Query invitations to combine advertising accounts under a Single Global Account. This API allows the user to query any invitations open for a given ads account.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param QueryAccountCombinationInvitationRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AccountCombinationInvitationSuccessResponse> Hydrated successful response.
     */
    public function queryAccountCombinationInvitation(
        QueryAccountCombinationInvitationRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/query/accountCombinationInvitations',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '200' => AccountCombinationInvitationSuccessResponse::class,
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
     * Update an invitation to combine Advertising Accounts under a Single Global Account. This API supports updating the invitations to approve, reject, or resend them.
     *
     * Required OpenAPI headers: Amazon-Ads-ClientId.
     * Declared OAuth scopes: advertising::campaign_management.
     *
     * @param UpdateAccountCombinationInvitationRequest|array<string, mixed>|null $request Optional operation request body.
     * @param RequestContext|null $context Optional per-request account and profile headers.
     * @return ApiResponse<AccountCombinationInvitationMultiStatusResponse> Hydrated successful response.
     */
    public function updateAccountCombinationInvitation(
        UpdateAccountCombinationInvitationRequest|array|null $request = null,
        ?RequestContext $context = null,
    ): ApiResponse {
        return $this->transport->request(
            method: 'POST',
            path: '/adsApi/v1/update/accountCombinationInvitations',
            query: [],
            body: $request,
            context: $context,
            requiredHeaders: [
                'Amazon-Ads-ClientId',
            ],
            responseTypes: [
                '207' => AccountCombinationInvitationMultiStatusResponse::class,
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
