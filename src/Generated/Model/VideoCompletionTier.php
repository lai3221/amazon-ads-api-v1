<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * VideoCompletionTier Enum:.
 *
 * @generated from Amazon Ads API v1 schema VideoCompletionTier.
 */
enum VideoCompletionTier: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoCompletionTier';

    case ALL_TIERS = 'ALL_TIERS';
    case GREATER_THAN_10_PERCENT = 'GREATER_THAN_10_PERCENT';
    case GREATER_THAN_20_PERCENT = 'GREATER_THAN_20_PERCENT';
    case GREATER_THAN_30_PERCENT = 'GREATER_THAN_30_PERCENT';
    case GREATER_THAN_40_PERCENT = 'GREATER_THAN_40_PERCENT';
    case GREATER_THAN_50_PERCENT = 'GREATER_THAN_50_PERCENT';
    case GREATER_THAN_60_PERCENT = 'GREATER_THAN_60_PERCENT';
    case GREATER_THAN_70_PERCENT = 'GREATER_THAN_70_PERCENT';
    case GREATER_THAN_80_PERCENT = 'GREATER_THAN_80_PERCENT';
    case GREATER_THAN_90_PERCENT = 'GREATER_THAN_90_PERCENT';

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
