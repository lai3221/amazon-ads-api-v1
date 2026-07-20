<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * OffAmazonBudgetControlStrategy Enum:.
 *
 * @generated from Amazon Ads API v1 schema OffAmazonBudgetControlStrategy.
 */
enum OffAmazonBudgetControlStrategy: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'OffAmazonBudgetControlStrategy';

    case MAXIMIZE_REACH = 'MAXIMIZE_REACH';
    case MINIMIZE_SPEND = 'MINIMIZE_SPEND';

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
