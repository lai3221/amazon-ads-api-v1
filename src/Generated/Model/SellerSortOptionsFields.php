<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Specify which field to order by. Field Name Supported Ordering --- --- name ASCENDING,DESCENDING.
 *
 * @generated from Amazon Ads API v1 schema SellerSortOptionsFields.
 */
enum SellerSortOptionsFields: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellerSortOptionsFields';

    case NAME = 'name';

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
