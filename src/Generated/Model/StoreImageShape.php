<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreImageShape Description ------ ------ SQUARE Square shape.
 *
 * @generated from Amazon Ads API v1 schema StoreImageShape.
 */
enum StoreImageShape: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageShape';

    case SQUARE = 'SQUARE';

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
