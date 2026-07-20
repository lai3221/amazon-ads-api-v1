<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of MRC viewability targeting.
 *
 * @generated from Amazon Ads API v1 schema MrcViewabilityTargetingType.
 */
enum MrcViewabilityTargetingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MrcViewabilityTargetingType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case MRC_VIEWABILITY_GTE_30 = 'MRC_VIEWABILITY_GTE_30';
    case MRC_VIEWABILITY_GTE_40 = 'MRC_VIEWABILITY_GTE_40';
    case MRC_VIEWABILITY_GTE_50 = 'MRC_VIEWABILITY_GTE_50';
    case MRC_VIEWABILITY_GTE_55 = 'MRC_VIEWABILITY_GTE_55';
    case MRC_VIEWABILITY_GTE_60 = 'MRC_VIEWABILITY_GTE_60';
    case MRC_VIEWABILITY_GTE_65 = 'MRC_VIEWABILITY_GTE_65';
    case MRC_VIEWABILITY_GTE_70 = 'MRC_VIEWABILITY_GTE_70';
    case MRC_VIEWABILITY_GTE_75 = 'MRC_VIEWABILITY_GTE_75';
    case MRC_VIEWABILITY_GTE_80 = 'MRC_VIEWABILITY_GTE_80';

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
