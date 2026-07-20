<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * VideoInitiationType Enum:.
 *
 * @generated from Amazon Ads API v1 schema VideoInitiationType.
 */
enum VideoInitiationType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoInitiationType';

    case AUTOPLAY = 'AUTOPLAY';
    case UNKNOWN = 'UNKNOWN';
    case USER_INITIATED = 'USER_INITIATED';

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
