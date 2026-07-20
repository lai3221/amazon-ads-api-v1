<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AdProduct Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdProduct.
 */
enum AdProduct: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdProduct';

    case AMAZON_DSP = 'AMAZON_DSP';
    case SPONSORED_BRANDS = 'SPONSORED_BRANDS';
    case SPONSORED_DISPLAY = 'SPONSORED_DISPLAY';
    case SPONSORED_PRODUCTS = 'SPONSORED_PRODUCTS';
    case SPONSORED_TELEVISION = 'SPONSORED_TELEVISION';

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
