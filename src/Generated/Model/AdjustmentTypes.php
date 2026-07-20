<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the AdjustmentTypes values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdjustmentTypes.
 */
enum AdjustmentTypes: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdjustmentTypes';

    case FIXED_VALUE = 'FIXED_VALUE';
    case MULTIPLIER = 'MULTIPLIER';
    case OFFSET_PERCENTAGE = 'OFFSET_PERCENTAGE';
    case OFFSET_VALUE = 'OFFSET_VALUE';

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
