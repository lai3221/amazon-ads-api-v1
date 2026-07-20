<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTileTextSize Description ------ ------ LARGE Large text size MEDIUM Medium text size MINI Mini text size SMALL Small text size.
 *
 * @generated from Amazon Ads API v1 schema StoreTileTextSize.
 */
enum StoreTileTextSize: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTileTextSize';

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
