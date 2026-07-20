<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * MatchKeyType Enum: MatchKeyType Description --- --- EMAIL Email address match key type. PHONE Phone number match key type. FIRST NAME First name match key type. LAST NAME Last name match key type. ADDRESS Address match key type. CITY City match key type. ST.
 *
 * @generated from Amazon Ads API v1 schema MatchKeyType.
 */
enum MatchKeyType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MatchKeyType';

    case ADDRESS = 'ADDRESS';
    case CITY = 'CITY';
    case EMAIL = 'EMAIL';
    case FIP = 'FIP';
    case FIRST_NAME = 'FIRST_NAME';
    case KANTAR_ID = 'KANTAR_ID';
    case LAST_NAME = 'LAST_NAME';
    case MAID = 'MAID';
    case MATCH_ID = 'MATCH_ID';
    case MERKLE_ID = 'MERKLE_ID';
    case PHONE = 'PHONE';
    case POSTAL = 'POSTAL';
    case RAMP_ID = 'RAMP_ID';
    case REAL_ID = 'REAL_ID';
    case STATE = 'STATE';

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
