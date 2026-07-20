<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * FeeType Enum:.
 *
 * @generated from Amazon Ads API v1 schema FeeType.
 */
enum FeeType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'FeeType';

    case AMAZON_AUDIENCE = 'AMAZON_AUDIENCE';
    case AMAZON_DSP = 'AMAZON_DSP';
    case MANAGED_SERVICE_FEE = 'MANAGED_SERVICE_FEE';
    case OMNICHANNEL_METRICS = 'OMNICHANNEL_METRICS';
    case THIRD_PARTY_APPLIED = 'THIRD_PARTY_APPLIED';
    case THIRD_PARTY_AUDIENCE = 'THIRD_PARTY_AUDIENCE';
    case THIRD_PARTY_TARGETING = 'THIRD_PARTY_TARGETING';

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
