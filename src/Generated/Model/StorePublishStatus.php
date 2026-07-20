<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Status of content publish.
 *
 * @generated from Amazon Ads API v1 schema StorePublishStatus.
 */
enum StorePublishStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StorePublishStatus';

    case DRAFT = 'DRAFT';
    case REVIEW_IN_PROGRESS = 'REVIEW_IN_PROGRESS';

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
