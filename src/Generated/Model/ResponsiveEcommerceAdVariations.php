<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the ResponsiveEcommerceAdVariations values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ResponsiveEcommerceAdVariations.
 */
enum ResponsiveEcommerceAdVariations: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ResponsiveEcommerceAdVariations';

    case ADD_TO_CART = 'ADD_TO_CART';
    case COUPON = 'COUPON';
    case CUSTOMER_REVIEWS = 'CUSTOMER_REVIEWS';
    case SHOP_NOW = 'SHOP_NOW';

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
