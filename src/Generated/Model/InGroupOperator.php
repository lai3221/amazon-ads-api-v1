<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * InGroupOperator Enum:.
 *
 * @generated from Amazon Ads API v1 schema InGroupOperator.
 */
enum InGroupOperator: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'InGroupOperator';

    case ALL = 'ALL';
    case ANY = 'ANY';

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
