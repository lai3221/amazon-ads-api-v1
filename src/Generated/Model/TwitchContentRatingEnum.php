<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * TwitchContentRatingEnum Enum:.
 *
 * @generated from Amazon Ads API v1 schema TwitchContentRatingEnum.
 */
enum TwitchContentRatingEnum: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TwitchContentRatingEnum';

    case TWITCH_MODERATE = 'TWITCH_MODERATE';
    case TWITCH_RESTRICTIVE = 'TWITCH_RESTRICTIVE';

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
