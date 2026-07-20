<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the AssetBasedCreativeCallToActionType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AssetBasedCreativeCallToActionType.
 */
enum AssetBasedCreativeCallToActionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AssetBasedCreativeCallToActionType';

    case BOOK_NOW = 'BOOK_NOW';
    case BUY_NOW = 'BUY_NOW';
    case DISCOVER_MORE = 'DISCOVER_MORE';
    case DOWNLOAD_NOW = 'DOWNLOAD_NOW';
    case EXPLORE_NOW = 'EXPLORE_NOW';
    case GET_APP = 'GET_APP';
    case GET_QUOTE = 'GET_QUOTE';
    case LEARN_MORE = 'LEARN_MORE';
    case PRE_ORDER_NOW = 'PRE_ORDER_NOW';
    case SEE_DETAILS = 'SEE_DETAILS';
    case SHOP_NOW = 'SHOP_NOW';
    case SIGN_UP_NOW = 'SIGN_UP_NOW';
    case SUBSCRIBE_NOW = 'SUBSCRIBE_NOW';

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
