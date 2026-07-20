<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * MatchType Enum: MatchType Description --- --- KEYWORDS RELATED TO GIFTS Search terms related to gifts. KEYWORDS RELATED TO PEER BRANDS PRODUCT CATEGORY Search terms that shoppers often use when searching for and interacting with products from other brands i.
 *
 * @generated from Amazon Ads API v1 schema MatchType.
 */
enum MatchType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MatchType';

    case BROAD = 'BROAD';
    case EXACT = 'EXACT';
    case INTERESTED_AUDIENCE = 'INTERESTED_AUDIENCE';
    case KEYWORDS_CLOSE_MATCH = 'KEYWORDS_CLOSE_MATCH';
    case KEYWORDS_LOOSE_MATCH = 'KEYWORDS_LOOSE_MATCH';
    case KEYWORDS_RELATED_TO_GIFTS = 'KEYWORDS_RELATED_TO_GIFTS';
    case KEYWORDS_RELATED_TO_PEER_BRANDS_PRODUCT_CATEGORY = 'KEYWORDS_RELATED_TO_PEER_BRANDS_PRODUCT_CATEGORY';
    case KEYWORDS_RELATED_TO_PRIME_DAY = 'KEYWORDS_RELATED_TO_PRIME_DAY';
    case KEYWORDS_RELATED_TO_YOUR_BRAND = 'KEYWORDS_RELATED_TO_YOUR_BRAND';
    case KEYWORDS_RELATED_TO_YOUR_LANDING_PAGES = 'KEYWORDS_RELATED_TO_YOUR_LANDING_PAGES';
    case KEYWORDS_RELATED_TO_YOUR_PRODUCT_CATEGORY = 'KEYWORDS_RELATED_TO_YOUR_PRODUCT_CATEGORY';
    case PHRASE = 'PHRASE';
    case PRODUCTS_SIMILAR_TO_ADVERTISED_PRODUCTS = 'PRODUCTS_SIMILAR_TO_ADVERTISED_PRODUCTS';
    case PRODUCT_COMPLEMENTS = 'PRODUCT_COMPLEMENTS';
    case PRODUCT_EXACT = 'PRODUCT_EXACT';
    case PRODUCT_REMARKETING = 'PRODUCT_REMARKETING';
    case PRODUCT_SIMILAR = 'PRODUCT_SIMILAR';
    case PRODUCT_SUBSTITUTES = 'PRODUCT_SUBSTITUTES';

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
