<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Placement Enum:.
 *
 * @generated from Amazon Ads API v1 schema Placement.
 */
enum Placement: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Placement';

    case HOME_PAGE = 'HOME_PAGE';
    case PRODUCT_PAGE = 'PRODUCT_PAGE';
    case REST_OF_SEARCH = 'REST_OF_SEARCH';
    case SITE_AMAZON_BUSINESS = 'SITE_AMAZON_BUSINESS';
    case TOP_OF_SEARCH = 'TOP_OF_SEARCH';

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
