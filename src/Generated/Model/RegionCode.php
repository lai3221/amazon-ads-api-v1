<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * RegionCode Description ------ ------ EU Europe FE Far East NA North America.
 *
 * @generated from Amazon Ads API v1 schema RegionCode.
 */
enum RegionCode: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RegionCode';

    case EU = 'EU';
    case FE = 'FE';
    case NA = 'NA';

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
