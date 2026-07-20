<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * KeywordMatchType Enum:.
 *
 * @generated from Amazon Ads API v1 schema KeywordMatchType.
 */
enum KeywordMatchType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'KeywordMatchType';

    case BROAD = 'BROAD';
    case EXACT = 'EXACT';
    case PHRASE = 'PHRASE';

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
