<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the DVBrandSafetyContentCategoryType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DVBrandSafetyContentCategoryType.
 */
enum DVBrandSafetyContentCategoryType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DVBrandSafetyContentCategoryType';

    case AD_SERVER = 'AD_SERVER';
    case CELEBRITY_GOSSIP = 'CELEBRITY_GOSSIP';
    case CULTS_SURVIVALISM = 'CULTS_SURVIVALISM';
    case EXTREME_GRAPHIC = 'EXTREME_GRAPHIC';
    case GAMBLING = 'GAMBLING';
    case INCENTIVIZED_MALWARE_CLUTTER = 'INCENTIVIZED_MALWARE_CLUTTER';
    case INFLAMMATORY_POLITICS_NEWS = 'INFLAMMATORY_POLITICS_NEWS';
    case NEGATIVE_NEWS_FINANCIAL = 'NEGATIVE_NEWS_FINANCIAL';
    case NEGATIVE_NEWS_PHARMACEUTICAL = 'NEGATIVE_NEWS_PHARMACEUTICAL';
    case NON_STANDARD_CONTENT_NON_ENGLISH = 'NON_STANDARD_CONTENT_NON_ENGLISH';
    case NON_STANDARD_CONTENT_PARKING_PAGE = 'NON_STANDARD_CONTENT_PARKING_PAGE';
    case OCCULT = 'OCCULT';
    case PIRACY_COPYRIGHT_INFRINGEMENT = 'PIRACY_COPYRIGHT_INFRINGEMENT';
    case UNMODERATED_UGC_FORUMS_IMAGES_VIDEO = 'UNMODERATED_UGC_FORUMS_IMAGES_VIDEO';

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
