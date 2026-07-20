<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * BrandSafetyTier Enum:.
 *
 * @generated from Amazon Ads API v1 schema BrandSafetyTier.
 */
enum BrandSafetyTier: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandSafetyTier';

    case EXPANDED = 'EXPANDED';
    case RESTRICTIVE = 'RESTRICTIVE';
    case STANDARD = 'STANDARD';

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
