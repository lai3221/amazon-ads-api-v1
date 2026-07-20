<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the TierAdjustmentType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TierAdjustmentType.
 */
enum TierAdjustmentType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TierAdjustmentType';

    case DECREASE = 'DECREASE';
    case DEFAULT = 'DEFAULT';
    case INCREASE = 'INCREASE';

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
