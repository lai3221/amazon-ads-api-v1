<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * NativeContentPosition Enum:.
 *
 * @generated from Amazon Ads API v1 schema NativeContentPosition.
 */
enum NativeContentPosition: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'NativeContentPosition';

    case IN_ARTICLE = 'IN_ARTICLE';
    case IN_FEED = 'IN_FEED';
    case PERIPHERAL = 'PERIPHERAL';
    case RECOMMENDATION = 'RECOMMENDATION';
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
