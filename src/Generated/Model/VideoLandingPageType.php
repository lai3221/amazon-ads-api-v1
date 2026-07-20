<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * VideoLandingPageType Enum:.
 *
 * @generated from Amazon Ads API v1 schema VideoLandingPageType.
 */
enum VideoLandingPageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoLandingPageType';

    case DETAIL_PAGE = 'DETAIL_PAGE';
    case MOMENT = 'MOMENT';
    case OFF_AMAZON_LINK = 'OFF_AMAZON_LINK';
    case STORE = 'STORE';

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
