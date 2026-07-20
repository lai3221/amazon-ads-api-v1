<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the MarketplaceScope values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MarketplaceScope.
 */
enum MarketplaceScope: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MarketplaceScope';

    case GLOBAL = 'GLOBAL';
    case SINGLE_MARKETPLACE = 'SINGLE_MARKETPLACE';

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
