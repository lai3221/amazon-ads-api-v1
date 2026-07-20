<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the TimeUnit values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TimeUnit.
 */
enum TimeUnit: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TimeUnit';

    case DAYS = 'DAYS';
    case HOURS = 'HOURS';
    case MINUTES = 'MINUTES';

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
