<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CollectionLandingPageType Enum:.
 *
 * @generated from Amazon Ads API v1 schema CollectionLandingPageType.
 */
enum CollectionLandingPageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CollectionLandingPageType';

    case ASIN_LIST = 'ASIN_LIST';
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
