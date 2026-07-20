<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Ad Extension Status. AdExtensionStatus Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionStatus.
 */
enum AdExtensionStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionStatus';

    case OPTED_OUT = 'OPTED_OUT';

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
