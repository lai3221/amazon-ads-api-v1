<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Each enum member is in the IANA Time Zone Database.
 *
 * @generated from Amazon Ads API v1 schema TimeZoneIana.
 */
enum TimeZoneIana: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TimeZoneIana';

    case AMERICA_ANCHORAGE = 'America/Anchorage';
    case AMERICA_CARACAS = 'America/Caracas';
    case AMERICA_CHICAGO = 'America/Chicago';
    case AMERICA_DENVER = 'America/Denver';
    case AMERICA_HALIFAX = 'America/Halifax';
    case AMERICA_LOS_ANGELES = 'America/Los_Angeles';
    case AMERICA_MEXICO_CITY = 'America/Mexico_City';
    case AMERICA_NEW_YORK = 'America/New_York';
    case AMERICA_SAO_PAULO = 'America/Sao_Paulo';
    case AMERICA_ST_JOHNS = 'America/St_Johns';
    case ASIA_ALMATY = 'Asia/Almaty';
    case ASIA_BAGHDAD = 'Asia/Baghdad';
    case ASIA_BANGKOK = 'Asia/Bangkok';
    case ASIA_DUBAI = 'Asia/Dubai';
    case ASIA_HONG_KONG = 'Asia/Hong_Kong';
    case ASIA_KABUL = 'Asia/Kabul';
    case ASIA_KATHMANDU = 'Asia/Kathmandu';
    case ASIA_KOLKATA = 'Asia/Kolkata';
    case ASIA_MAGADAN = 'Asia/Magadan';
    case ASIA_RIYADH = 'Asia/Riyadh';
    case ASIA_SHANGHAI = 'Asia/Shanghai';
    case ASIA_SINGAPORE = 'Asia/Singapore';
    case ASIA_TEHRAN = 'Asia/Tehran';
    case ASIA_TOKYO = 'Asia/Tokyo';
    case ASIA_YEKATERINBURG = 'Asia/Yekaterinburg';
    case ASIA_YEREVAN = 'Asia/Yerevan';
    case ATLANTIC_AZORES = 'Atlantic/Azores';
    case ATLANTIC_SOUTH_GEORGIA = 'Atlantic/South_Georgia';
    case AUSTRALIA_BRISBANE = 'Australia/Brisbane';
    case AUSTRALIA_DARWIN = 'Australia/Darwin';
    case AUSTRALIA_SYDNEY = 'Australia/Sydney';
    case EET = 'EET';
    case EUROPE_AMSTERDAM = 'Europe/Amsterdam';
    case EUROPE_ISTANBUL = 'Europe/Istanbul';
    case EUROPE_LONDON = 'Europe/London';
    case EUROPE_PARIS = 'Europe/Paris';
    case EUROPE_STOCKHOLM = 'Europe/Stockholm';
    case INDIAN_COCOS = 'Indian/Cocos';
    case PACIFIC_AUCKLAND = 'Pacific/Auckland';
    case PACIFIC_FIJI = 'Pacific/Fiji';
    case PACIFIC_HONOLULU = 'Pacific/Honolulu';
    case PACIFIC_KWAJALEIN = 'Pacific/Kwajalein';
    case PACIFIC_MIDWAY = 'Pacific/Midway';

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
