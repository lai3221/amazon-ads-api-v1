<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * EventSource Enum: EventSource Description --- --- ANDROID Events from a mobile application on the Android operating system. FIRE TV Events from a mobile application on the Fire TV operating system. IOS Events from a mobile application on the iOS operating s.
 *
 * @generated from Amazon Ads API v1 schema EventSource.
 */
enum EventSource: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'EventSource';

    case ANDROID = 'ANDROID';
    case FIRE_TV = 'FIRE_TV';
    case IOS = 'IOS';
    case MEASUREMENT_ATTRIBUTION_PARTNER = 'MEASUREMENT_ATTRIBUTION_PARTNER';
    case OFFLINE = 'OFFLINE';
    case WEBSITE = 'WEBSITE';

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
