<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreBleedImageType Description ------ ------ ALL All sides image bleed CORNER Corner image bleed NONE No image bleed SIDE Side image bleed.
 *
 * @generated from Amazon Ads API v1 schema StoreBleedImageType.
 */
enum StoreBleedImageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreBleedImageType';

    case ALL = 'ALL';
    case CORNER = 'CORNER';
    case NONE = 'NONE';
    case SIDE = 'SIDE';

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
