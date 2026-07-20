<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ProductCollectionLandingPageType Enum:.
 *
 * @generated from Amazon Ads API v1 schema ProductCollectionLandingPageType.
 */
enum ProductCollectionLandingPageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCollectionLandingPageType';

    case ASIN_LIST = 'ASIN_LIST';
    case CUSTOM_URL = 'CUSTOM_URL';
    case STORE = 'STORE';

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
