<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ModerationStatus Enum:.
 *
 * @generated from Amazon Ads API v1 schema ModerationStatus.
 */
enum ModerationStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ModerationStatus';

    case APPROVED_WITH_EXCEPTIONS = 'APPROVED_WITH_EXCEPTIONS';
    case PENDING_TRANSLATION = 'PENDING_TRANSLATION';
    case PUBLISHED = 'PUBLISHED';
    case REJECTED_BY_MODERATION = 'REJECTED_BY_MODERATION';
    case SUBMITTED_FOR_MODERATION = 'SUBMITTED_FOR_MODERATION';

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
