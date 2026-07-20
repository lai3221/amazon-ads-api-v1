<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreShoppableTextOption Description ------ ------ NO TEXT UNDER INTERACTIVE IMAGE No text under interactive image TEXT OVER IMAGE Text over interactive image TEXT UNDER INTERACTIVE IMAGE Text under interactive image.
 *
 * @generated from Amazon Ads API v1 schema StoreShoppableTextOption.
 */
enum StoreShoppableTextOption: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreShoppableTextOption';

    case NO_TEXT_UNDER_INTERACTIVE_IMAGE = 'NO_TEXT_UNDER_INTERACTIVE_IMAGE';
    case TEXT_OVER_IMAGE = 'TEXT_OVER_IMAGE';
    case TEXT_UNDER_INTERACTIVE_IMAGE = 'TEXT_UNDER_INTERACTIVE_IMAGE';

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
