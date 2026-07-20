<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ContentInstreamPosition Enum:.
 *
 * @generated from Amazon Ads API v1 schema ContentInstreamPosition.
 */
enum ContentInstreamPosition: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentInstreamPosition';

    case MID_ROLL = 'MID_ROLL';
    case POST_ROLL = 'POST_ROLL';
    case PRE_ROLL = 'PRE_ROLL';
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
