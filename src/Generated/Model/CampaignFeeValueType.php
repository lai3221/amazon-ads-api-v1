<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CampaignFeeValueType Enum:.
 *
 * @generated from Amazon Ads API v1 schema CampaignFeeValueType.
 */
enum CampaignFeeValueType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignFeeValueType';

    case PERCENTAGE_OF_BUDGET = 'PERCENTAGE_OF_BUDGET';

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
