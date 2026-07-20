<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * CreativeType Enum:.
 *
 * @generated from Amazon Ads API v1 schema CreativeType.
 */
enum CreativeType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeType';

    case IMAGE = 'IMAGE';
    case VIDEO = 'VIDEO';

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
