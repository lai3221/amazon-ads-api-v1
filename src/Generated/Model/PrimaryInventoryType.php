<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * PrimaryInventoryType Enum:.
 *
 * @generated from Amazon Ads API v1 schema PrimaryInventoryType.
 */
enum PrimaryInventoryType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PrimaryInventoryType';

    case AUDIO = 'AUDIO';
    case DISPLAY = 'DISPLAY';
    case VIDEO_OLV = 'VIDEO_OLV';
    case VIDEO_STV = 'VIDEO_STV';

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
