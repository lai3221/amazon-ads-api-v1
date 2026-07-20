<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DeviceOrientation Enum:.
 *
 * @generated from Amazon Ads API v1 schema DeviceOrientation.
 */
enum DeviceOrientation: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeviceOrientation';

    case LANDSCAPE = 'LANDSCAPE';
    case PORTRAIT = 'PORTRAIT';

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
