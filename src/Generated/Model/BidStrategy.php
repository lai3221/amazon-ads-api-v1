<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * BidStrategy Enum:.
 *
 * @generated from Amazon Ads API v1 schema BidStrategy.
 */
enum BidStrategy: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BidStrategy';

    case MANUAL = 'MANUAL';
    case NEW_TO_BRAND = 'NEW_TO_BRAND';
    case PRIORITIZE_KPI_TARGET = 'PRIORITIZE_KPI_TARGET';
    case RULE_BASED = 'RULE_BASED';
    case SALES_DOWN_ONLY = 'SALES_DOWN_ONLY';
    case SALES_UP_AND_DOWN = 'SALES_UP_AND_DOWN';
    case SPEND_BUDGET_IN_FULL = 'SPEND_BUDGET_IN_FULL';
    case USE_CAMPAIGN_STRATEGY = 'USE_CAMPAIGN_STRATEGY';

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
