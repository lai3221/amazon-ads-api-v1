<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the JoinOperator values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema JoinOperator.
 */
enum JoinOperator: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'JoinOperator';

    case AND = 'AND';
    case OR = 'OR';

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
