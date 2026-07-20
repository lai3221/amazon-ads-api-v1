<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * FeeValueType Enum:.
 *
 * @generated from Amazon Ads API v1 schema FeeValueType.
 */
enum FeeValueType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'FeeValueType';

    case FIXED_CPM = 'FIXED_CPM';
    case PERCENTAGE_OF_BUDGET = 'PERCENTAGE_OF_BUDGET';
    case PERCENTAGE_OF_SUPPLY_COST = 'PERCENTAGE_OF_SUPPLY_COST';

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
