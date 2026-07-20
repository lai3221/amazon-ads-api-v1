<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * RolloverStrategy Enum:.
 *
 * @generated from Amazon Ads API v1 schema RolloverStrategy.
 */
enum RolloverStrategy: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RolloverStrategy';

    case CUMULATIVE_BUDGET_ROLLOVER = 'CUMULATIVE_BUDGET_ROLLOVER';
    case NO_ROLLOVER = 'NO_ROLLOVER';
    case PRIOR_BUDGET_ROLLOVER = 'PRIOR_BUDGET_ROLLOVER';

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
