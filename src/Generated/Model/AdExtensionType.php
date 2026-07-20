<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Ad Extension Type. AdExtensionType Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionType.
 */
enum AdExtensionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionType';

    case PROMPTS = 'PROMPTS';
    case VIDEO = 'VIDEO';

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
