<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTextOptionType Description ------ ------ NO TEXT OVER VIDEO No text overlay on video TEXT OVER VIDEO Text overlay on video.
 *
 * @generated from Amazon Ads API v1 schema StoreTextOptionType.
 */
enum StoreTextOptionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTextOptionType';

    case NO_TEXT_OVER_VIDEO = 'NO_TEXT_OVER_VIDEO';
    case TEXT_OVER_VIDEO = 'TEXT_OVER_VIDEO';

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
