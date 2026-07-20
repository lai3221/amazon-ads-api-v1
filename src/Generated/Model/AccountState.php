<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * This represents the current state of an advertising account.
 *
 * @generated from Amazon Ads API v1 schema AccountState.
 */
enum AccountState: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountState';

    case APPROVED = 'APPROVED';
    case ARCHIVED = 'ARCHIVED';
    case REGISTRATION_IN_PROGRESS = 'REGISTRATION_IN_PROGRESS';
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
