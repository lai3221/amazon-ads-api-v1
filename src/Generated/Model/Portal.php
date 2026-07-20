<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Portal Description --- --- SELLER CENTRAL VENDOR CENTRAL AUTHOR CENTRAL KDP CENTRAL GROCERY CENTRAL MERCH.
 *
 * @generated from Amazon Ads API v1 schema Portal.
 */
enum Portal: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Portal';

    case AUTHOR_CENTRAL = 'AUTHOR_CENTRAL';
    case GROCERY_CENTRAL = 'GROCERY_CENTRAL';
    case KDP_CENTRAL = 'KDP_CENTRAL';
    case MERCH = 'MERCH';
    case SELLER_CENTRAL = 'SELLER_CENTRAL';
    case VENDOR_CENTRAL = 'VENDOR_CENTRAL';

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
