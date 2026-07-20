<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CurrencyCode Enum:.
 *
 * @generated from Amazon Ads API v1 schema CurrencyCode.
 */
enum CurrencyCode: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CurrencyCode';

    case AED = 'AED';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AZN = 'AZN';
    case BBD = 'BBD';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case CAD = 'CAD';
    case CHF = 'CHF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case COP = 'COP';
    case CRC = 'CRC';
    case CZK = 'CZK';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case EUR = 'EUR';
    case GBP = 'GBP';
    case GHS = 'GHS';
    case GTQ = 'GTQ';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HRK = 'HRK';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case MAD = 'MAD';
    case MUR = 'MUR';
    case MXN = 'MXN';
    case MXP = 'MXP';
    case MYR = 'MYR';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NOK = 'NOK';
    case NZD = 'NZD';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case SAR = 'SAR';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case THB = 'THB';
    case TND = 'TND';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case USD = 'USD';
    case UYU = 'UYU';
    case VND = 'VND';
    case XAF = 'XAF';
    case XCD = 'XCD';
    case XOF = 'XOF';
    case XPF = 'XPF';
    case ZAR = 'ZAR';

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
