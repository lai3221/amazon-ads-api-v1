<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of brand exposure viewability targeting.
 *
 * @generated from Amazon Ads API v1 schema BrandExposureViewabilityTargetingType.
 */
enum BrandExposureViewabilityTargetingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandExposureViewabilityTargetingType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case BRAND_EXPOSURE_VIEWABILITY_GTE_10_SEC_AVG_DURATION = 'BRAND_EXPOSURE_VIEWABILITY_GTE_10_SEC_AVG_DURATION';
    case BRAND_EXPOSURE_VIEWABILITY_GTE_15_SEC_AVG_DURATION = 'BRAND_EXPOSURE_VIEWABILITY_GTE_15_SEC_AVG_DURATION';
    case BRAND_EXPOSURE_VIEWABILITY_GTE_5_SEC_AVG_DURATION = 'BRAND_EXPOSURE_VIEWABILITY_GTE_5_SEC_AVG_DURATION';

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
