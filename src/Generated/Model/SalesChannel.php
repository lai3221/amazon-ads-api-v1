<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SalesChannel Enum:.
 *
 * @generated from Amazon Ads API v1 schema SalesChannel.
 */
enum SalesChannel: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SalesChannel';

    case AMAZON = 'AMAZON';
    case OFF_AMAZON = 'OFF_AMAZON';

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
