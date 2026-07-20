<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CostType Enum:.
 *
 * @generated from Amazon Ads API v1 schema CostType.
 */
enum CostType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CostType';

    case CPC = 'CPC';
    case CPM = 'CPM';
    case FIXED_PRICE = 'FIXED_PRICE';
    case VCPM = 'VCPM';

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
