<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Goal Enum:.
 *
 * @generated from Amazon Ads API v1 schema Goal.
 */
enum Goal: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Goal';

    case AWARENESS = 'AWARENESS';
    case CONSIDERATION = 'CONSIDERATION';
    case CONVERSIONS = 'CONVERSIONS';

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
