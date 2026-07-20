<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of viewability tier.
 *
 * @generated from Amazon Ads API v1 schema ViewabilityTierType.
 */
enum ViewabilityTierType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ViewabilityTierType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case VIEWABILITY_TIER_GT_40 = 'VIEWABILITY_TIER_GT_40';
    case VIEWABILITY_TIER_GT_50 = 'VIEWABILITY_TIER_GT_50';
    case VIEWABILITY_TIER_GT_60 = 'VIEWABILITY_TIER_GT_60';
    case VIEWABILITY_TIER_GT_70 = 'VIEWABILITY_TIER_GT_70';
    case VIEWABILITY_TIER_LT_40 = 'VIEWABILITY_TIER_LT_40';

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
