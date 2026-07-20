<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * LinearTvInventoryType Enum:.
 *
 * @generated from Amazon Ads API v1 schema LinearTvInventoryType.
 */
enum LinearTvInventoryType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvInventoryType';

    case BROADCAST = 'BROADCAST';
    case CABLE = 'CABLE';
    case SYNDICATION = 'SYNDICATION';

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
