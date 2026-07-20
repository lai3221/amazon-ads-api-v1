<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SellingAccountLinkState Description ------ ------ APPROVED IN PROGRESS PENDING APPROVAL REJECTED.
 *
 * @generated from Amazon Ads API v1 schema SellingAccountLinkState.
 */
enum SellingAccountLinkState: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccountLinkState';

    case APPROVED = 'APPROVED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case PENDING_APPROVAL = 'PENDING_APPROVAL';
    case REJECTED = 'REJECTED';

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
