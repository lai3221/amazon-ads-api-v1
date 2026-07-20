<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The IAS brand safety risk level.
 *
 * @generated from Amazon Ads API v1 schema IASBrandSafetyLevelType.
 */
enum IASBrandSafetyLevelType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IASBrandSafetyLevelType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case BRAND_SAFETY_EXCLUDE_HIGH_AND_MODERATE_RISK = 'BRAND_SAFETY_EXCLUDE_HIGH_AND_MODERATE_RISK';
    case BRAND_SAFETY_EXCLUDE_HIGH_RISK = 'BRAND_SAFETY_EXCLUDE_HIGH_RISK';

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
