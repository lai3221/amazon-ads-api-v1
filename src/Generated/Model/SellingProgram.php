<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * SellingProgram Description ------ ------ AMAZON AUTHOR AMAZON SELLER AMAZON VENDOR.
 *
 * @generated from Amazon Ads API v1 schema SellingProgram.
 */
enum SellingProgram: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingProgram';

    case AMAZON_AUTHOR = 'AMAZON_AUTHOR';
    case AMAZON_SELLER = 'AMAZON_SELLER';
    case AMAZON_VENDOR = 'AMAZON_VENDOR';

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
