<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DataProcessingOption Enum: DataProcessingOption Description --- --- LIMITED DATA USE Indicates that the event should be processed with limited data use.
 *
 * @generated from Amazon Ads API v1 schema DataProcessingOption.
 */
enum DataProcessingOption: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DataProcessingOption';

    case LIMITED_DATA_USE = 'LIMITED_DATA_USE';

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
