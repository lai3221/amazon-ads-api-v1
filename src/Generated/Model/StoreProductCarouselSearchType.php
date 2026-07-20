<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreProductCarouselSearchType Description ------ ------ BEST SELLING Best selling items RECOMMENDATION FOR YOU Personalized recommendations.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCarouselSearchType.
 */
enum StoreProductCarouselSearchType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCarouselSearchType';

    case BEST_SELLING = 'BEST_SELLING';
    case RECOMMENDATION_FOR_YOU = 'RECOMMENDATION_FOR_YOU';

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
