<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DeliveryProfile Enum:.
 *
 * @generated from Amazon Ads API v1 schema DeliveryProfile.
 */
enum DeliveryProfile: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeliveryProfile';

    case ASAP = 'ASAP';
    case EVEN = 'EVEN';
    case PACE_AHEAD = 'PACE_AHEAD';

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
