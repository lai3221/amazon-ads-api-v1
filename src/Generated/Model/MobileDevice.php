<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * MobileDevice Enum:.
 *
 * @generated from Amazon Ads API v1 schema MobileDevice.
 */
enum MobileDevice: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MobileDevice';

    case ANDROID = 'ANDROID';
    case IPAD = 'IPAD';
    case IPHONE = 'IPHONE';
    case KINDLE_FIRE = 'KINDLE_FIRE';
    case KINDLE_FIRE_HD = 'KINDLE_FIRE_HD';

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
