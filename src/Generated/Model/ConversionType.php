<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ConversionType Enum: ConversionType Description --- --- ADD TO SHOPPING CART When customers add a product to their shopping cart. APPLICATION When customers submit an application. CHECKOUT When customers go to the checkout page. CONTACT When customers provi.
 *
 * @generated from Amazon Ads API v1 schema ConversionType.
 */
enum ConversionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ConversionType';

    case ADD_TO_SHOPPING_CART = 'ADD_TO_SHOPPING_CART';
    case APPLICATION = 'APPLICATION';
    case CHECKOUT = 'CHECKOUT';
    case CONTACT = 'CONTACT';
    case LEAD = 'LEAD';
    case MOBILE_APP_FIRST_START = 'MOBILE_APP_FIRST_START';
    case OFF_AMAZON_PURCHASES = 'OFF_AMAZON_PURCHASES';
    case OTHER = 'OTHER';
    case PAGE_VIEW = 'PAGE_VIEW';
    case SEARCH = 'SEARCH';
    case SIGN_UP = 'SIGN_UP';
    case SUBSCRIBE = 'SUBSCRIBE';

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
