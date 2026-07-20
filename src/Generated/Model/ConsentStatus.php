<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * ConsentStatus Enum: ConsentStatus Description --- --- GRANTED Consent has been granted. DENIED Consent has been denied.
 *
 * @generated from Amazon Ads API v1 schema ConsentStatus.
 */
enum ConsentStatus: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ConsentStatus';

    case DENIED = 'DENIED';
    case GRANTED = 'GRANTED';

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
