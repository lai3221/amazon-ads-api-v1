<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * IntegrationType Enum: IntegrationType Description --- --- DIRECT Supplier is directly integrated with ADSP via OpenRTB. BIDSWITCH Supplier routes inventory through BidSwitch as an intermediary.
 *
 * @generated from Amazon Ads API v1 schema IntegrationType.
 */
enum IntegrationType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IntegrationType';

    case BIDSWITCH = 'BIDSWITCH';
    case DIRECT = 'DIRECT';

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
