<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTileBorderSize Description ------ ------ LARGE Large border size MEDIUM Medium border size NONE No border SMALL Small border size.
 *
 * @generated from Amazon Ads API v1 schema StoreTileBorderSize.
 */
enum StoreTileBorderSize: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTileBorderSize';

    case LARGE = 'LARGE';
    case MEDIUM = 'MEDIUM';
    case NONE = 'NONE';
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
