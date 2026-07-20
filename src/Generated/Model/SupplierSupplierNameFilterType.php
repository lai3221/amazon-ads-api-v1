<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SupplierSupplierNameFilterType Enum: SupplierSupplierNameFilterType Description --- --- BROAD MATCH Filter by broad match.
 *
 * @generated from Amazon Ads API v1 schema SupplierSupplierNameFilterType.
 */
enum SupplierSupplierNameFilterType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSupplierNameFilterType';

    case BROAD_MATCH = 'BROAD_MATCH';

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
