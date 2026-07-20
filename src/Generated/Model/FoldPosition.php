<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * FoldPosition Enum:.
 *
 * @generated from Amazon Ads API v1 schema FoldPosition.
 */
enum FoldPosition: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'FoldPosition';

    case ABOVE_THE_FOLD = 'ABOVE_THE_FOLD';
    case BELOW_THE_FOLD = 'BELOW_THE_FOLD';
    case UNKNOWN = 'UNKNOWN';

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
