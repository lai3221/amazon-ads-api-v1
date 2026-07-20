<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * AdType Enum:.
 *
 * @generated from Amazon Ads API v1 schema AdType.
 */
enum AdType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdType';

    case AUDIO = 'AUDIO';
    case COMPONENT = 'COMPONENT';
    case DISPLAY = 'DISPLAY';
    case PRODUCT_AD = 'PRODUCT_AD';
    case THIRD_PARTY = 'THIRD_PARTY';
    case VIDEO = 'VIDEO';

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
