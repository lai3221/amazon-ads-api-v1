<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ReportFormat Enum:.
 *
 * @generated from Amazon Ads API v1 schema ReportFormat.
 */
enum ReportFormat: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportFormat';

    case CSV = 'CSV';
    case GZIP_JSON = 'GZIP_JSON';
    case PARTITIONED_CSV = 'PARTITIONED_CSV';
    case PARTITIONED_GZIP_JSON = 'PARTITIONED_GZIP_JSON';

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
