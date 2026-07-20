<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the FeesThirdPartyProvider values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema FeesThirdPartyProvider.
 */
enum FeesThirdPartyProvider: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'FeesThirdPartyProvider';

    case COM_SCORE = 'COM_SCORE';
    case CPM_1 = 'CPM_1';
    case CPM_2 = 'CPM_2';
    case CPM_3 = 'CPM_3';
    case DOUBLE_CLICK_CAMPAIGN_MANAGER = 'DOUBLE_CLICK_CAMPAIGN_MANAGER';
    case DOUBLE_VERIFY = 'DOUBLE_VERIFY';
    case INTEGRAL_AD_SCIENCE = 'INTEGRAL_AD_SCIENCE';

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
