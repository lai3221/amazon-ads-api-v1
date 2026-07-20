<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the CreativeOptimizationGoalKpi values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreativeOptimizationGoalKpi.
 */
enum CreativeOptimizationGoalKpi: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeOptimizationGoalKpi';

    case CLICK_THROUGH_RATE = 'CLICK_THROUGH_RATE';
    case DETAIL_PAGE_VIEW_RATE = 'DETAIL_PAGE_VIEW_RATE';
    case PURCHASE_RATE = 'PURCHASE_RATE';

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
