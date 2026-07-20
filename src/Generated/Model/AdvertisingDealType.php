<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the AdvertisingDealType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealType.
 */
enum AdvertisingDealType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealType';

    case PREFERRED = 'PREFERRED';
    case PRIVATE_AUCTION = 'PRIVATE_AUCTION';
    case PROGRAMMATIC_GUARANTEED = 'PROGRAMMATIC_GUARANTEED';

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
