<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * LinearTvDaypartType Enum: LinearTvDaypartType Description --- --- STANDARD Industry-standard Linear TV daypart.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartType.
 */
enum LinearTvDaypartType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartType';

    case STANDARD = 'STANDARD';

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
