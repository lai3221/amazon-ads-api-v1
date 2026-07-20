<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the BrandStoreCallToActionType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreCallToActionType.
 */
enum BrandStoreCallToActionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreCallToActionType';

    case BUY_NOW = 'BUY_NOW';
    case DISCOVER_MORE = 'DISCOVER_MORE';
    case LEARN_MORE = 'LEARN_MORE';
    case SEE_DETAILS = 'SEE_DETAILS';
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
