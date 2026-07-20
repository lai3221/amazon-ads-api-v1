<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ResponsiveEcommerceLandingPageType Enum:.
 *
 * @generated from Amazon Ads API v1 schema ResponsiveEcommerceLandingPageType.
 */
enum ResponsiveEcommerceLandingPageType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ResponsiveEcommerceLandingPageType';

    case MOMENT = 'MOMENT';
    case STORE = 'STORE';

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
