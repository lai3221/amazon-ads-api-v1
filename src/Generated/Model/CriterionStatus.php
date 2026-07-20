<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the CriterionStatus values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CriterionStatus.
 */
enum CriterionStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CriterionStatus';

    case COMPLETED = 'COMPLETED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case NOT_STARTED = 'NOT_STARTED';

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
