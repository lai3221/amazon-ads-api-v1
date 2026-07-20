<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreProductSelectorImageLayout Description ------ ------ BOTTOM Bottom image layout LEFT Left image layout RIGHT Right image layout TOP Top image layout.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorImageLayout.
 */
enum StoreProductSelectorImageLayout: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorImageLayout';

    case BOTTOM = 'BOTTOM';
    case LEFT = 'LEFT';
    case RIGHT = 'RIGHT';
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
