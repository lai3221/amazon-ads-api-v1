<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreWidgetSectionType Description ------ ------ BANNER Section type for StoreBannerWidget BEST SELLING Section type for StoreProductCarouselWidget and StoreProductCarouselContent type DEALS AND COUPONS Section type for StoreDealsWidget and StoreDealsConten.
 *
 * @generated from Amazon Ads API v1 schema StoreWidgetSectionType.
 */
enum StoreWidgetSectionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreWidgetSectionType';

    case BANNER = 'BANNER';
    case BEST_SELLING = 'BEST_SELLING';
    case DEALS_AND_COUPONS = 'DEALS_AND_COUPONS';
    case EDITORIAL_ROW = 'EDITORIAL_ROW';
    case GALLERY = 'GALLERY';
    case HERO = 'HERO';
    case LIVE_VIDEO = 'LIVE_VIDEO';
    case MANUALLY_CURATED_PRODUCT_CAROUSEL = 'MANUALLY_CURATED_PRODUCT_CAROUSEL';
    case PREMIUM_BEST_SELLING = 'PREMIUM_BEST_SELLING';
    case PRODUCT_COLLECTION = 'PRODUCT_COLLECTION';
    case PRODUCT_GRID = 'PRODUCT_GRID';
    case RECOMMENDED = 'RECOMMENDED';
    case SHOP_THE_LOOK_CAROUSEL = 'SHOP_THE_LOOK_CAROUSEL';

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
