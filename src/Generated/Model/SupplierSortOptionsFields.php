<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Specify which field to order by. Field Name Supported Ordering --- --- supplierName ASCENDING,DESCENDING.
 *
 * @generated from Amazon Ads API v1 schema SupplierSortOptionsFields.
 */
enum SupplierSortOptionsFields: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSortOptionsFields';

    case SUPPLIER_NAME = 'supplierName';

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
