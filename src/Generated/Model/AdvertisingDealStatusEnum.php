<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AdvertisingDealStatusEnum Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealStatusEnum.
 */
enum AdvertisingDealStatusEnum: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealStatusEnum';

    case ACTIVE = 'ACTIVE';
    case ENDED = 'ENDED';
    case PAUSED = 'PAUSED';
    case SCHEDULED = 'SCHEDULED';

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
