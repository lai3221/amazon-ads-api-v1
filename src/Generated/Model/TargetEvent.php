<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * TargetEvent Enum:.
 *
 * @generated from Amazon Ads API v1 schema TargetEvent.
 */
enum TargetEvent: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetEvent';

    case PURCHASE = 'PURCHASE';
    case VIEW = 'VIEW';

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
