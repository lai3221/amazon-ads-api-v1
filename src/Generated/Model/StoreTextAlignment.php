<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTextAlignment Description ------ ------ CENTER Center alignment JUSTIFY Justified alignment LEFT Left alignment. Default value configured for StoreEmptyTile RIGHT Right alignment.
 *
 * @generated from Amazon Ads API v1 schema StoreTextAlignment.
 */
enum StoreTextAlignment: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTextAlignment';

    case CENTER = 'CENTER';
    case JUSTIFY = 'JUSTIFY';
    case LEFT = 'LEFT';
    case RIGHT = 'RIGHT';

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
