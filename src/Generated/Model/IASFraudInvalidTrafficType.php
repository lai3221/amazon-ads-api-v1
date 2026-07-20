<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of fraud invalid traffic.
 *
 * @generated from Amazon Ads API v1 schema IASFraudInvalidTrafficType.
 */
enum IASFraudInvalidTrafficType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IASFraudInvalidTrafficType';

    case ALLOW_ALL = 'ALLOW_ALL';
    case FRAUD_INVALID_TRAFFIC_EXCLUDE_HIGH_MODERATE_RISK = 'FRAUD_INVALID_TRAFFIC_EXCLUDE_HIGH_MODERATE_RISK';
    case FRAUD_INVALID_TRAFFIC_EXCLUDE_HIGH_RISK = 'FRAUD_INVALID_TRAFFIC_EXCLUDE_HIGH_RISK';

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
