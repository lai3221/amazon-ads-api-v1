<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Lookback Enum:.
 *
 * @generated from Amazon Ads API v1 schema Lookback.
 */
enum Lookback: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Lookback';

    case DAYS_14 = 'DAYS_14';
    case DAYS_180 = 'DAYS_180';
    case DAYS_30 = 'DAYS_30';
    case DAYS_365 = 'DAYS_365';
    case DAYS_60 = 'DAYS_60';
    case DAYS_7 = 'DAYS_7';
    case DAYS_90 = 'DAYS_90';

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
