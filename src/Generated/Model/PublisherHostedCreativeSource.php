<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The publisher ad server source for publisher hosted creative placeholder creatives. PublisherHostedCreativeSource Enum:.
 *
 * @generated from Amazon Ads API v1 schema PublisherHostedCreativeSource.
 */
enum PublisherHostedCreativeSource: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PublisherHostedCreativeSource';

    case GOOGLE_AD_MANAGER = 'GOOGLE_AD_MANAGER';

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
