<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * TimeZoneType Enum:.
 *
 * @generated from Amazon Ads API v1 schema TimeZoneType.
 */
enum TimeZoneType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TimeZoneType';

    case ADVERTISER_REGION = 'ADVERTISER_REGION';
    case VIEWER = 'VIEWER';

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
