<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The code string that describes the rejected reason. RejectedReasonDetailCode Enum:.
 *
 * @generated from Amazon Ads API v1 schema RejectedReasonDetailCode.
 */
enum RejectedReasonDetailCode: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RejectedReasonDetailCode';

    case BUSINESS_VERIFICATION_FAILED = 'BUSINESS_VERIFICATION_FAILED';
    case SALES_VERIFICATION_FAILED = 'SALES_VERIFICATION_FAILED';

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
