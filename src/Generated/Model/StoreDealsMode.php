<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreDealsMode Description ------ ------ AUTOMATIC Automatic mode BULK Bulk mode.
 *
 * @generated from Amazon Ads API v1 schema StoreDealsMode.
 */
enum StoreDealsMode: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreDealsMode';

    case AUTOMATIC = 'AUTOMATIC';
    case BULK = 'BULK';

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
