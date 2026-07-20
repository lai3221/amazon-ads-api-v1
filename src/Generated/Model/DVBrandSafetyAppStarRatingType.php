<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * App star rating to be used for excluding apps.
 *
 * @generated from Amazon Ads API v1 schema DVBrandSafetyAppStarRatingType.
 */
enum DVBrandSafetyAppStarRatingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DVBrandSafetyAppStarRatingType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case APP_STAR_RATING_LT_1_POINT_5_STARS = 'APP_STAR_RATING_LT_1_POINT_5_STARS';
    case APP_STAR_RATING_LT_2_POINT_5_STARS = 'APP_STAR_RATING_LT_2_POINT_5_STARS';
    case APP_STAR_RATING_LT_2_STARS = 'APP_STAR_RATING_LT_2_STARS';
    case APP_STAR_RATING_LT_3_POINT_5_STARS = 'APP_STAR_RATING_LT_3_POINT_5_STARS';
    case APP_STAR_RATING_LT_3_STARS = 'APP_STAR_RATING_LT_3_STARS';
    case APP_STAR_RATING_LT_4_POINT_5_STARS = 'APP_STAR_RATING_LT_4_POINT_5_STARS';
    case APP_STAR_RATING_LT_4_STARS = 'APP_STAR_RATING_LT_4_STARS';

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
