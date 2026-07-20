<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreProductSelectorButtonColor Description ------ ------ BLACK Black button color TRANSPARENT Transparent button color WHITE White button color.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorButtonColor.
 */
enum StoreProductSelectorButtonColor: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorButtonColor';

    case BLACK = 'BLACK';
    case TRANSPARENT = 'TRANSPARENT';
    case WHITE = 'WHITE';

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
