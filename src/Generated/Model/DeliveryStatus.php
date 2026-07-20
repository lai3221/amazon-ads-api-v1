<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DeliveryStatus Enum:.
 *
 * @generated from Amazon Ads API v1 schema DeliveryStatus.
 */
enum DeliveryStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeliveryStatus';

    case DELIVERING = 'DELIVERING';
    case LIMITED = 'LIMITED';
    case NOT_DELIVERING = 'NOT_DELIVERING';
    case UNAVAILABLE = 'UNAVAILABLE';

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
