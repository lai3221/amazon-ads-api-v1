<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SupplierState Enum: SupplierState Description --- --- CREATED Supplier record created but not yet in testing. TESTING Integration is in testing or onboarding phase. ACTIVE Supplier is live and sending production traffic to ADSP. INACTIVE Supplier integratio.
 *
 * @generated from Amazon Ads API v1 schema SupplierState.
 */
enum SupplierState: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierState';

    case ACTIVE = 'ACTIVE';
    case CREATED = 'CREATED';
    case INACTIVE = 'INACTIVE';
    case TESTING = 'TESTING';

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
