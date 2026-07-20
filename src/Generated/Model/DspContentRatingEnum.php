<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DspContentRatingEnum Enum:.
 *
 * @generated from Amazon Ads API v1 schema DspContentRatingEnum.
 */
enum DspContentRatingEnum: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DspContentRatingEnum';

    case RATING_NOT_AVAILABLE = 'RATING_NOT_AVAILABLE';
    case SUITABLE_FOR_ADULTS = 'SUITABLE_FOR_ADULTS';
    case SUITABLE_FOR_ALL_AUDIENCES = 'SUITABLE_FOR_ALL_AUDIENCES';
    case SUITABLE_FOR_MATURE_AUDIENCES = 'SUITABLE_FOR_MATURE_AUDIENCES';
    case SUITABLE_FOR_MOST_AUDIENCES_WITH_PARENTAL_GUIDANCE = 'SUITABLE_FOR_MOST_AUDIENCES_WITH_PARENTAL_GUIDANCE';
    case SUITABLE_FOR_TEEN_AND_OLDER_AUDIENCES = 'SUITABLE_FOR_TEEN_AND_OLDER_AUDIENCES';

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
