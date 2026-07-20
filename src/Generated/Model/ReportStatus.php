<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the ReportStatus values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ReportStatus.
 */
enum ReportStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportStatus';

    case COMPLETED = 'COMPLETED';
    case FAILED = 'FAILED';
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';

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
