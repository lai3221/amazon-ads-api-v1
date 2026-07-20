<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * DomainTargetTypes Enum:.
 *
 * @generated from Amazon Ads API v1 schema DomainTargetTypes.
 */
enum DomainTargetTypes: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DomainTargetTypes';

    case ADVERTISER_DOMAIN_LIST = 'ADVERTISER_DOMAIN_LIST';
    case DOMAIN_FILE = 'DOMAIN_FILE';
    case DOMAIN_LIST = 'DOMAIN_LIST';
    case DOMAIN_NAME = 'DOMAIN_NAME';

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
