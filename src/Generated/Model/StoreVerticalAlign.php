<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreVerticalAlign Description ------ ------ BOTTOM Bottom alignment MIDDLE Middle alignment TOP Top alignment.
 *
 * @generated from Amazon Ads API v1 schema StoreVerticalAlign.
 */
enum StoreVerticalAlign: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreVerticalAlign';

    case BOTTOM = 'BOTTOM';
    case MIDDLE = 'MIDDLE';
    case TOP = 'TOP';

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
