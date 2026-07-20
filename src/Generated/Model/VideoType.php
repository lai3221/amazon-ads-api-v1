<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Video Type: Video type of the asset added in the ad extension and its rendering form. VideoType Enum:.
 *
 * @generated from Amazon Ads API v1 schema VideoType.
 */
enum VideoType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoType';

    case SPOTLIGHT = 'SPOTLIGHT';

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
