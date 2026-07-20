<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AdvertisingDealPriceType Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealPriceType.
 */
enum AdvertisingDealPriceType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealPriceType';

    case FIXED_CPM = 'FIXED_CPM';
    case FIXED_PRICE = 'FIXED_PRICE';
    case FLOOR_RATE = 'FLOOR_RATE';

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
