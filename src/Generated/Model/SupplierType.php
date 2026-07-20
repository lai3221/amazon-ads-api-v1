<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SupplierType Enum: SupplierType Description --- --- THIRD PARTY EXCHANGE External SSP/exchange (Magnite, PubMatic, Index Exchange, etc.). AMAZON PUBLISHER SERVICES Amazon Publisher Services - first-party header bidding supply. PUBTECH Amazon PubTech - Amazo.
 *
 * @generated from Amazon Ads API v1 schema SupplierType.
 */
enum SupplierType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierType';

    case AMAZON_PUBLISHER_SERVICES = 'AMAZON_PUBLISHER_SERVICES';
    case DIRECT = 'DIRECT';
    case PUBTECH = 'PUBTECH';
    case THIRD_PARTY_EXCHANGE = 'THIRD_PARTY_EXCHANGE';

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
