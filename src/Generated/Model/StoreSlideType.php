<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreSlideType Description ------ ------ ASIN Slide type for StoreASINSlide IMAGE Slide type for StoreGallerySlide, StoreImageSlide.
 *
 * @generated from Amazon Ads API v1 schema StoreSlideType.
 */
enum StoreSlideType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreSlideType';

    case ASIN = 'ASIN';
    case IMAGE = 'IMAGE';

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
