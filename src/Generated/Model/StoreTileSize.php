<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTileSize Description ------ ------ LARGE Large tile size, StoreAWLSTile only uses LARGE MEDIUM Medium tile size MINI Mini tile size SMALL Small tile size.
 *
 * @generated from Amazon Ads API v1 schema StoreTileSize.
 */
enum StoreTileSize: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTileSize';

    case LARGE = 'LARGE';
    case MEDIUM = 'MEDIUM';
    case MINI = 'MINI';
    case SMALL = 'SMALL';

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
