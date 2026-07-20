<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * A list of country codes representing Amazon marketplaces.
 *
 * @generated from Amazon Ads API v1 schema Marketplace.
 */
enum Marketplace: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Marketplace';

    case AE = 'AE';
    case AU = 'AU';
    case BE = 'BE';
    case BR = 'BR';
    case CA = 'CA';
    case CL = 'CL';
    case CO = 'CO';
    case DE = 'DE';
    case EG = 'EG';
    case ES = 'ES';
    case FR = 'FR';
    case GB = 'GB';
    case IE = 'IE';
    case IN = 'IN';
    case IT = 'IT';
    case JP = 'JP';
    case MX = 'MX';
    case NG = 'NG';
    case NL = 'NL';
    case PL = 'PL';
    case SA = 'SA';
    case SE = 'SE';
    case SG = 'SG';
    case TR = 'TR';
    case US = 'US';
    case ZA = 'ZA';

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
