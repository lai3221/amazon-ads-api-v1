<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AppType Enum:.
 *
 * @generated from Amazon Ads API v1 schema AppType.
 */
enum AppType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AppType';

    case MOBILE = 'MOBILE';
    case STREAMING_TV = 'STREAMING_TV';

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
