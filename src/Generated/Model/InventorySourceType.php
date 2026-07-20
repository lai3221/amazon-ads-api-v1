<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * InventorySourceType Enum:.
 *
 * @generated from Amazon Ads API v1 schema InventorySourceType.
 */
enum InventorySourceType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'InventorySourceType';

    case AMAZON = 'AMAZON';
    case APD = 'APD';
    case DEAL = 'DEAL';
    case INVENTORY_GROUP = 'INVENTORY_GROUP';
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
