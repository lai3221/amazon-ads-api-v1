<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CampaignFeeType Enum:.
 *
 * @generated from Amazon Ads API v1 schema CampaignFeeType.
 */
enum CampaignFeeType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignFeeType';

    case AGENCY = 'AGENCY';

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
