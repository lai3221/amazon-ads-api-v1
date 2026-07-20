<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ContentRatingTypes Enum:.
 *
 * @generated from Amazon Ads API v1 schema ContentRatingTypes.
 */
enum ContentRatingTypes: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentRatingTypes';

    case DSP_CONTENT_RATING = 'DSP_CONTENT_RATING';
    case TWITCH_CONTENT_RATING = 'TWITCH_CONTENT_RATING';

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
