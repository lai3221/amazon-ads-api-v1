<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Match type for audience targeting inclusion groups, if any. You can enhance your ad group’s reach to consumers with similar shopping, streaming, and browsing behaviors or interests as your selected audiences across all inventory sources, regardless of the.
 *
 * @generated from Amazon Ads API v1 schema DefaultAudienceTargetingMatchType.
 */
enum DefaultAudienceTargetingMatchType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DefaultAudienceTargetingMatchType';

    case EXACT = 'EXACT';
    case SIMILAR = 'SIMILAR';

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
