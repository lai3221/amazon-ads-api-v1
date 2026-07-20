<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * InventoryType Enum:.
 *
 * @generated from Amazon Ads API v1 schema InventoryType.
 */
enum InventoryType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'InventoryType';

    case AAP_MOBILE_APP = 'AAP_MOBILE_APP';
    case AMAZON_MOBILE_DISPLAY = 'AMAZON_MOBILE_DISPLAY';
    case AUDIO = 'AUDIO';
    case AUDIO_AMAZON_DEAL = 'AUDIO_AMAZON_DEAL';
    case DISPLAY = 'DISPLAY';
    case LIVE_EVENTS = 'LIVE_EVENTS';
    case ONLINE_VIDEO = 'ONLINE_VIDEO';
    case PODCAST = 'PODCAST';
    case STANDARD_DISPLAY = 'STANDARD_DISPLAY';
    case STREAMING_TV = 'STREAMING_TV';
    case STREAMING_TV_AMAZON_DEAL = 'STREAMING_TV_AMAZON_DEAL';
    case VIDEO = 'VIDEO';

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
