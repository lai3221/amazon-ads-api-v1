<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of average completion and fully viewable rate targeting.
 *
 * @generated from Amazon Ads API v1 schema AverageCompletionAndFullyViewableRateTargetingType.
 */
enum AverageCompletionAndFullyViewableRateTargetingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AverageCompletionAndFullyViewableRateTargetingType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_10 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_10';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_20 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_20';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_25 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_25';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_30 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_30';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_35 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_35';
    case AVG_COMPLETION_FULLY_VIEWABLE_GTE_40 = 'AVG_COMPLETION_FULLY_VIEWABLE_GTE_40';

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
