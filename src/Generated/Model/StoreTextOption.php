<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTextOption Description ------ ------ TEXT NEXT TO IMAGE Text next to image TEXT OVER IMAGE Text overlaid on image.
 *
 * @generated from Amazon Ads API v1 schema StoreTextOption.
 */
enum StoreTextOption: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTextOption';

    case TEXT_NEXT_TO_IMAGE = 'TEXT_NEXT_TO_IMAGE';
    case TEXT_OVER_IMAGE = 'TEXT_OVER_IMAGE';

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
