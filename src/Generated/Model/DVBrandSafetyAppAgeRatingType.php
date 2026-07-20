<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the DVBrandSafetyAppAgeRatingType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DVBrandSafetyAppAgeRatingType.
 */
enum DVBrandSafetyAppAgeRatingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DVBrandSafetyAppAgeRatingType';

    case ADULTS_ONLY_18_PLUS = 'ADULTS_ONLY_18_PLUS';
    case EVERYONE_4_PLUS = 'EVERYONE_4_PLUS';
    case MATURE_17_PLUS = 'MATURE_17_PLUS';
    case TEENS_12_PLUS = 'TEENS_12_PLUS';
    case TWEENS_9_PLUS = 'TWEENS_9_PLUS';
    case UNKNOWN = 'UNKNOWN';

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
