<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the NewsGuardBrandGuardTrustedNewsTargetingType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema NewsGuardBrandGuardTrustedNewsTargetingType.
 */
enum NewsGuardBrandGuardTrustedNewsTargetingType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'NewsGuardBrandGuardTrustedNewsTargetingType';

    case BASIC_INCLUDE = 'BASIC_INCLUDE';
    case BUSINESS_INCLUDE = 'BUSINESS_INCLUDE';
    case COMMUNITY_INCLUDE = 'COMMUNITY_INCLUDE';
    case HEALTH_INCLUDE = 'HEALTH_INCLUDE';
    case HIGH_INCLUDE = 'HIGH_INCLUDE';
    case LIFESTYLE_INCLUDE = 'LIFESTYLE_INCLUDE';
    case LOCAL_INCLUDE = 'LOCAL_INCLUDE';
    case MAX_INCLUDE = 'MAX_INCLUDE';
    case POLITICS_INCLUDE = 'POLITICS_INCLUDE';
    case TECH_INCLUDE = 'TECH_INCLUDE';

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
