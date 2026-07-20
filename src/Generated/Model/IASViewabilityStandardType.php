<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The viewability standard.
 *
 * @generated from Amazon Ads API v1 schema IASViewabilityStandardType.
 */
enum IASViewabilityStandardType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IASViewabilityStandardType';

    case GROUPM = 'GROUPM';
    case MRC = 'MRC';
    case NONE = 'NONE';
    case PUBLICIS = 'PUBLICIS';

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
