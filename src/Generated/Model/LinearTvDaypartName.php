<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * LinearTvDaypartName Enum: LinearTvDaypartName Description --- --- EARLY FRINGE The time period in the early evening, typically from 4:30 PM to 7:30 PM, leading into prime time. This daypart often features local news, syndicated programming, and game shows.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartName.
 */
enum LinearTvDaypartName: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartName';

    case ALL_DAY = 'ALL_DAY';
    case EARLY_FRINGE = 'EARLY_FRINGE';
    case LATE_FRINGE = 'LATE_FRINGE';
    case PRIME_TIME = 'PRIME_TIME';
    case WEEKDAY_DAYTIME = 'WEEKDAY_DAYTIME';
    case WEEKDAY_MORNING = 'WEEKDAY_MORNING';
    case WEEKEND_DAYTIME = 'WEEKEND_DAYTIME';

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
