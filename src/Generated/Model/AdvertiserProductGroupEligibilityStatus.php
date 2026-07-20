<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The current status of an eligibility request. AdvertiserProductGroupEligibilityStatus Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserProductGroupEligibilityStatus.
 */
enum AdvertiserProductGroupEligibilityStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserProductGroupEligibilityStatus';

    case APPROVED = 'APPROVED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';

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
