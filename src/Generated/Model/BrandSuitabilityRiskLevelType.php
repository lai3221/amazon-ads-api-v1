<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The Double Verify brand suitability risk level.
 *
 * @generated from Amazon Ads API v1 schema BrandSuitabilityRiskLevelType.
 */
enum BrandSuitabilityRiskLevelType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandSuitabilityRiskLevelType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case HIGH = 'HIGH';
    case HIGH_MEDIUM = 'HIGH_MEDIUM';
    case HIGH_MEDIUM_LOW = 'HIGH_MEDIUM_LOW';

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
