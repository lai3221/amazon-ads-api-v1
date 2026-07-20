<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the AdChoicesPosition values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdChoicesPosition.
 */
enum AdChoicesPosition: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdChoicesPosition';

    case BOTTOM_LEFT = 'BOTTOM_LEFT';
    case BOTTOM_RIGHT = 'BOTTOM_RIGHT';
    case TOP_LEFT = 'TOP_LEFT';
    case TOP_RIGHT = 'TOP_RIGHT';

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
