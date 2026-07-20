<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The unit of reach numbers. ReachUnit Enum:.
 *
 * @generated from Amazon Ads API v1 schema ReachUnit.
 */
enum ReachUnit: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReachUnit';

    case HOUSEHOLD = 'HOUSEHOLD';
    case INDIVIDUAL = 'INDIVIDUAL';

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
