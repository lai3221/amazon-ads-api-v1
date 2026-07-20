<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreWidgetType Description ------ ------ BANNER Widget type and content type for StoreBannerWidget EDITORIAL ROW Widget type for StoreCustomCodeWidget, StoreImageWithTextWidget, StoreImageWidget, StoreProductWidget, StoreShoppableImageWidget, StoreTextWidg.
 *
 * @generated from Amazon Ads API v1 schema StoreWidgetType.
 */
enum StoreWidgetType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreWidgetType';

    case BANNER = 'BANNER';
    case EDITORIAL_ROW = 'EDITORIAL_ROW';
    case GALLERY = 'GALLERY';
    case HERO = 'HERO';
    case LIVE_VIDEO = 'LIVE_VIDEO';
    case MULTI_MEDIA_CAROUSEL = 'MULTI_MEDIA_CAROUSEL';
    case PRODUCT_CAROUSEL = 'PRODUCT_CAROUSEL';
    case PRODUCT_COLLECTION = 'PRODUCT_COLLECTION';
    case PRODUCT_GRID = 'PRODUCT_GRID';

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
