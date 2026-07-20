<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Reason codes for why a tactic type is ineligible IneligibleAutomatedTargetingTacticReasonCode Enum:.
 *
 * @generated from Amazon Ads API v1 schema IneligibleAutomatedTargetingTacticReasonCode.
 */
enum IneligibleAutomatedTargetingTacticReasonCode: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IneligibleAutomatedTargetingTacticReasonCode';

    case CONVERSION_SELECTIONS_EMPTY = 'CONVERSION_SELECTIONS_EMPTY';
    case CONVERSION_SELECTIONS_EXCEEDED = 'CONVERSION_SELECTIONS_EXCEEDED';
    case CONVERSION_SELECTIONS_MINIMUM_NOT_MET = 'CONVERSION_SELECTIONS_MINIMUM_NOT_MET';
    case NOT_ELIGIBLE_ADVERTISER = 'NOT_ELIGIBLE_ADVERTISER';
    case NOT_ELIGIBLE_GOAL = 'NOT_ELIGIBLE_GOAL';
    case NOT_ELIGIBLE_INVENTORY_TYPE = 'NOT_ELIGIBLE_INVENTORY_TYPE';
    case UNSUPPORTED_COUNTRY = 'UNSUPPORTED_COUNTRY';

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
