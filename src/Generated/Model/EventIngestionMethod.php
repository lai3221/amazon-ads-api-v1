<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * EventIngestionMethod Enum: EventIngestionMethod Description --- --- SERVER TO SERVER Events tracked with the events import API.
 *
 * @generated from Amazon Ads API v1 schema EventIngestionMethod.
 */
enum EventIngestionMethod: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'EventIngestionMethod';

    case SERVER_TO_SERVER = 'SERVER_TO_SERVER';

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
