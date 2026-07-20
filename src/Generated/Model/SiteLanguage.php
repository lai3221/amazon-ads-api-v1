<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SiteLanguage Enum:.
 *
 * @generated from Amazon Ads API v1 schema SiteLanguage.
 */
enum SiteLanguage: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SiteLanguage';

    case AR = 'AR';
    case BN = 'BN';
    case CS = 'CS';
    case DA = 'DA';
    case DE = 'DE';
    case EN = 'EN';
    case ES = 'ES';
    case FI = 'FI';
    case FR = 'FR';
    case GU = 'GU';
    case HI = 'HI';
    case IT = 'IT';
    case JA = 'JA';
    case KN = 'KN';
    case ML = 'ML';
    case MR = 'MR';
    case NL = 'NL';
    case NO = 'NO';
    case OTHER = 'OTHER';
    case PA = 'PA';
    case PL = 'PL';
    case PT = 'PT';
    case SV = 'SV';
    case TA = 'TA';
    case TE = 'TE';
    case TR = 'TR';
    case ZH = 'ZH';

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
