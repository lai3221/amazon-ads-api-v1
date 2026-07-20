<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ProductMatchType Enum:.
 *
 * @generated from Amazon Ads API v1 schema ProductMatchType.
 */
enum ProductMatchType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductMatchType';

    case PRODUCT_COMPLEMENTS = 'PRODUCT_COMPLEMENTS';
    case PRODUCT_EXACT = 'PRODUCT_EXACT';
    case PRODUCT_REMARKETING = 'PRODUCT_REMARKETING';
    case PRODUCT_SIMILAR = 'PRODUCT_SIMILAR';

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
