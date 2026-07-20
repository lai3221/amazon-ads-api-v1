<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreColorPalette Description ------ ------ DEFAULT INVERTED Inverted default color scheme DEFAULT Default color scheme SOLID BLACK Solid black color scheme SOLID WHITE Solid white color scheme TRANSLUCENT BLACK Translucent black color scheme TRANSLUCENT WH.
 *
 * @generated from Amazon Ads API v1 schema StoreColorPalette.
 */
enum StoreColorPalette: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreColorPalette';

    case DEFAULT = 'DEFAULT';
    case DEFAULT_INVERTED = 'DEFAULT_INVERTED';
    case SOLID_BLACK = 'SOLID_BLACK';
    case SOLID_WHITE = 'SOLID_WHITE';
    case TRANSLUCENT_BLACK = 'TRANSLUCENT_BLACK';
    case TRANSLUCENT_WHITE = 'TRANSLUCENT_WHITE';
    case TRANSPARENT_BLACK = 'TRANSPARENT_BLACK';
    case TRANSPARENT_WHITE = 'TRANSPARENT_WHITE';

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
