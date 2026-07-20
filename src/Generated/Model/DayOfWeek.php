<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DayOfWeek Enum:.
 *
 * @generated from Amazon Ads API v1 schema DayOfWeek.
 */
enum DayOfWeek: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DayOfWeek';

    case FRIDAY = 'FRIDAY';
    case MONDAY = 'MONDAY';
    case SATURDAY = 'SATURDAY';
    case SUNDAY = 'SUNDAY';
    case THURSDAY = 'THURSDAY';
    case TUESDAY = 'TUESDAY';
    case WEDNESDAY = 'WEDNESDAY';

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
