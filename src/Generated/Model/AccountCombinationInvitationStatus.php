<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * This represents the current state of an account combination invitation.
 *
 * @generated from Amazon Ads API v1 schema AccountCombinationInvitationStatus.
 */
enum AccountCombinationInvitationStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountCombinationInvitationStatus';

    case APPROVED = 'APPROVED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case RESENT = 'RESENT';

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
