<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreImageTextAlign Description ------ ------ LEFT Left text alignment RIGHT Right text alignment.
 *
 * @generated from Amazon Ads API v1 schema StoreImageTextAlign.
 */
enum StoreImageTextAlign: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageTextAlign';

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
