<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ComparisonOperator Enum:.
 *
 * @generated from Amazon Ads API v1 schema ComparisonOperator.
 */
enum ComparisonOperator: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ComparisonOperator';

    case EQUALS = 'EQUALS';
    case IN = 'IN';

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
