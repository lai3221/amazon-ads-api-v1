<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * BudgetAllocation Enum:.
 *
 * @generated from Amazon Ads API v1 schema BudgetAllocation.
 */
enum BudgetAllocation: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BudgetAllocation';

    case AUTO = 'AUTO';
    case MANUAL = 'MANUAL';

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
