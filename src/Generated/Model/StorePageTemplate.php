<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StorePageTemplate Description ------ ------ BLANK Empty template for custom layouts HIGHLIGHT Template for highlighting specific content MARQUEE Template featuring a prominent marquee section PRODUCT COLLECTION Template for displaying collections of product.
 *
 * @generated from Amazon Ads API v1 schema StorePageTemplate.
 */
enum StorePageTemplate: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StorePageTemplate';

    case BLANK = 'BLANK';
    case HIGHLIGHT = 'HIGHLIGHT';
    case MARQUEE = 'MARQUEE';
    case PRODUCT_COLLECTION = 'PRODUCT_COLLECTION';
    case PRODUCT_GRID = 'PRODUCT_GRID';

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
