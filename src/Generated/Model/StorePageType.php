<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StorePageType Description ------ ------ BRAND STORE PAGE Standard brand store page that allows customization to show case the brand and product LANDING PAGE Landing page for specific ads program with predefined template.
 *
 * @generated from Amazon Ads API v1 schema StorePageType.
 */
enum StorePageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StorePageType';

    case BRAND_STORE_PAGE = 'BRAND_STORE_PAGE';
    case LANDING_PAGE = 'LANDING_PAGE';

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
