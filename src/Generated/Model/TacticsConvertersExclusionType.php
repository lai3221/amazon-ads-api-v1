<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * TacticsConvertersExclusionType Enum:.
 *
 * @generated from Amazon Ads API v1 schema TacticsConvertersExclusionType.
 */
enum TacticsConvertersExclusionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TacticsConvertersExclusionType';

    case NO_EXCLUSION = 'NO_EXCLUSION';
    case RECENT_CONVERTERS = 'RECENT_CONVERTERS';

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
