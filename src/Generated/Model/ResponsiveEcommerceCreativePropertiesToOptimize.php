<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ResponsiveEcommerceCreativePropertiesToOptimize Enum:.
 *
 * @generated from Amazon Ads API v1 schema ResponsiveEcommerceCreativePropertiesToOptimize.
 */
enum ResponsiveEcommerceCreativePropertiesToOptimize: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ResponsiveEcommerceCreativePropertiesToOptimize';

    case HEADLINE = 'HEADLINE';

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
