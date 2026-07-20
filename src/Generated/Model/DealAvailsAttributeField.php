<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Available attributes for aggregating deal avails results. DealAvailsAttributeField Enum: DealAvailsAttributeField Description --- --- INVENTORY TYPE Break down by inventory type (e.g. display, video, audio). CREATIVE SIZE Break down by creative size (width.
 *
 * @generated from Amazon Ads API v1 schema DealAvailsAttributeField.
 */
enum DealAvailsAttributeField: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealAvailsAttributeField';

    case APP = 'APP';
    case AUDIENCE = 'AUDIENCE';
    case COUNTRY_CODE = 'COUNTRY_CODE';
    case CREATIVE_SIZE = 'CREATIVE_SIZE';
    case DEVICE_TYPE = 'DEVICE_TYPE';
    case DOMAIN = 'DOMAIN';
    case INVENTORY_TYPE = 'INVENTORY_TYPE';
    case SUPPLIER_SELLER = 'SUPPLIER_SELLER';

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
