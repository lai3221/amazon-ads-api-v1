<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AdGroupNameFilterType Enum: AdGroupNameFilterType Description --- --- EXACT MATCH Filter by exact match. BROAD MATCH Filter by broad match.
 *
 * @generated from Amazon Ads API v1 schema AdGroupNameFilterType.
 */
enum AdGroupNameFilterType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupNameFilterType';

    case BROAD_MATCH = 'BROAD_MATCH';
    case EXACT_MATCH = 'EXACT_MATCH';

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
