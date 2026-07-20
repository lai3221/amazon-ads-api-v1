<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ProductCollectionCreativePropertiesToOptimize Enum:.
 *
 * @generated from Amazon Ads API v1 schema ProductCollectionCreativePropertiesToOptimize.
 */
enum ProductCollectionCreativePropertiesToOptimize: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCollectionCreativePropertiesToOptimize';

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
