<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CreativeSource Enum:.
 *
 * @generated from Amazon Ads API v1 schema CreativeSource.
 */
enum CreativeSource: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeSource';

    case ADVERTISER = 'ADVERTISER';
    case PUBLISHER = 'PUBLISHER';

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
