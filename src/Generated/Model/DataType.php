<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DataType Enum: DataType Description --- --- STRING String data type. INTEGER 32-bit signed integer data type. TIMESTAMP Timestamp data type.
 *
 * @generated from Amazon Ads API v1 schema DataType.
 */
enum DataType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DataType';

    case INTEGER = 'INTEGER';
    case STRING = 'STRING';
    case TIMESTAMP = 'TIMESTAMP';

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
