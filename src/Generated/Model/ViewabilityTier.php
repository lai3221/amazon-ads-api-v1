<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ViewabilityTier Enum:.
 *
 * @generated from Amazon Ads API v1 schema ViewabilityTier.
 */
enum ViewabilityTier: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ViewabilityTier';

    case ALL_TIERS = 'ALL_TIERS';
    case GREATER_THAN_40_PERCENT = 'GREATER_THAN_40_PERCENT';
    case GREATER_THAN_50_PERCENT = 'GREATER_THAN_50_PERCENT';
    case GREATER_THAN_60_PERCENT = 'GREATER_THAN_60_PERCENT';
    case GREATER_THAN_70_PERCENT = 'GREATER_THAN_70_PERCENT';
    case LESS_THAN_40_PERCENT = 'LESS_THAN_40_PERCENT';

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
