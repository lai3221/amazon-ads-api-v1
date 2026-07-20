<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AutomatedTargetingTactic Enum:.
 *
 * @generated from Amazon Ads API v1 schema AutomatedTargetingTactic.
 */
enum AutomatedTargetingTactic: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AutomatedTargetingTactic';

    case AWARENESS = 'AWARENESS';
    case CUSTOMER_ACQUISITION = 'CUSTOMER_ACQUISITION';
    case MAXIMIZE_PERFORMANCE = 'MAXIMIZE_PERFORMANCE';
    case PROSPECTING = 'PROSPECTING';
    case REMARKETING = 'REMARKETING';
    case RETENTION = 'RETENTION';
    case SEARCH = 'SEARCH';

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
