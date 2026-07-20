<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the SupportedThirdPartySellers values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SupportedThirdPartySellers.
 */
enum SupportedThirdPartySellers: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupportedThirdPartySellers';

    case ALL = 'ALL';
    case NONE = 'NONE';

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
