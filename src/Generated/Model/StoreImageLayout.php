<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreImageLayout Description ------ ------ CONTAIN Contain layout COVER Cover layout TEXT Text layout.
 *
 * @generated from Amazon Ads API v1 schema StoreImageLayout.
 */
enum StoreImageLayout: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageLayout';

    case CONTAIN = 'CONTAIN';
    case COVER = 'COVER';
    case TEXT = 'TEXT';

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
