<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreLayoutType Description ------ ------ DEFAULT Default layout configuration SHOWCASE Showcase layout configuration for featured display.
 *
 * @generated from Amazon Ads API v1 schema StoreLayoutType.
 */
enum StoreLayoutType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreLayoutType';

    case DEFAULT = 'DEFAULT';
    case SHOWCASE = 'SHOWCASE';

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
