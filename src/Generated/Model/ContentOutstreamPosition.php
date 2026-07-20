<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ContentOutstreamPosition Enum:.
 *
 * @generated from Amazon Ads API v1 schema ContentOutstreamPosition.
 */
enum ContentOutstreamPosition: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentOutstreamPosition';

    case ACCOMPANYING_CONTENT = 'ACCOMPANYING_CONTENT';
    case INTERSTITIAL = 'INTERSTITIAL';
    case STANDALONE = 'STANDALONE';
    case UNKNOWN = 'UNKNOWN';

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
