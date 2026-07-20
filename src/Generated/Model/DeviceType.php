<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DeviceType Enum:.
 *
 * @generated from Amazon Ads API v1 schema DeviceType.
 */
enum DeviceType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeviceType';

    case CONNECTED_DEVICE = 'CONNECTED_DEVICE';
    case CONNECTED_TV = 'CONNECTED_TV';
    case DESKTOP = 'DESKTOP';
    case MOBILE = 'MOBILE';
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
