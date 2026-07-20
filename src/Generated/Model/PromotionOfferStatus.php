<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the PromotionOfferStatus values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionOfferStatus.
 */
enum PromotionOfferStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionOfferStatus';

    case AVAILABLE = 'AVAILABLE';
    case IN_PROGRESS = 'IN_PROGRESS';
    case MISSED = 'MISSED';
    case REWARDED = 'REWARDED';

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
