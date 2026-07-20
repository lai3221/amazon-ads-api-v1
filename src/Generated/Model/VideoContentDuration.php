<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * VideoContentDuration Enum:.
 *
 * @generated from Amazon Ads API v1 schema VideoContentDuration.
 */
enum VideoContentDuration: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoContentDuration';

    case EXTENDED = 'EXTENDED';
    case LONG = 'LONG';
    case MEDIUM = 'MEDIUM';
    case SHORT = 'SHORT';
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
