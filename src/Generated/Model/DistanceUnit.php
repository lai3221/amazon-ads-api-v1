<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DistanceUnit Enum: DistanceUnit Description --- --- KILOMETERS Distance in kilometers MILES Distance in miles.
 *
 * @generated from Amazon Ads API v1 schema DistanceUnit.
 */
enum DistanceUnit: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DistanceUnit';

    case KILOMETERS = 'KILOMETERS';
    case MILES = 'MILES';

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
