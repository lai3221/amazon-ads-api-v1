<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the ShopperSegment values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ShopperSegment.
 */
enum ShopperSegment: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ShopperSegment';

    case NEW_TO_BRAND = 'NEW_TO_BRAND';

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
