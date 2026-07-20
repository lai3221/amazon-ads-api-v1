<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * All available options on how to combine an account metadata with other accounts.
 *
 * @generated from Amazon Ads API v1 schema AccountFunction.
 */
enum AccountFunction: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountFunction';

    case BUSINESS_DETAILS_SOURCE = 'BUSINESS_DETAILS_SOURCE';

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
