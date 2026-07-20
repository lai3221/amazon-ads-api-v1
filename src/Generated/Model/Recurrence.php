<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the Recurrence values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Recurrence.
 */
enum Recurrence: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Recurrence';

    case DAILY = 'DAILY';
    case LIFETIME = 'LIFETIME';
    case MONTHLY = 'MONTHLY';

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
