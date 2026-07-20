<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the ExcludeAppsAndSitesType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ExcludeAppsAndSitesType.
 */
enum ExcludeAppsAndSitesType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ExcludeAppsAndSitesType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case FRAUD_TRAFFIC_LEVEL_GTE_02 = 'FRAUD_TRAFFIC_LEVEL_GTE_02';
    case FRAUD_TRAFFIC_LEVEL_GTE_04 = 'FRAUD_TRAFFIC_LEVEL_GTE_04';
    case FRAUD_TRAFFIC_LEVEL_GTE_06 = 'FRAUD_TRAFFIC_LEVEL_GTE_06';
    case FRAUD_TRAFFIC_LEVEL_GTE_08 = 'FRAUD_TRAFFIC_LEVEL_GTE_08';
    case FRAUD_TRAFFIC_LEVEL_GTE_10 = 'FRAUD_TRAFFIC_LEVEL_GTE_10';
    case FRAUD_TRAFFIC_LEVEL_GTE_100 = 'FRAUD_TRAFFIC_LEVEL_GTE_100';
    case FRAUD_TRAFFIC_LEVEL_GTE_25 = 'FRAUD_TRAFFIC_LEVEL_GTE_25';
    case FRAUD_TRAFFIC_LEVEL_GTE_50 = 'FRAUD_TRAFFIC_LEVEL_GTE_50';

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
