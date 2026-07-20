<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * IndustryVertical Description ------ ------ AMS Keyword AMS Keyword AMS Self Service AMS Self Service Automotive Automotive Consumer Goods Consumer Goods Entertainment Entertainment Financial Services Financial Services Hardware & Electronics Hardware & Elec.
 *
 * @generated from Amazon Ads API v1 schema IndustryVertical.
 */
enum IndustryVertical: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IndustryVertical';

    case AMS_KEYWORD = 'AMS Keyword';
    case AMS_SELF_SERVICE = 'AMS Self Service';
    case AUTOMOTIVE = 'Automotive';
    case CONSUMER_GOODS = 'Consumer Goods';
    case ENTERTAINMENT = 'Entertainment';
    case FINANCIAL_SERVICES = 'Financial Services';
    case HARDWARE_ELECTRONICS = 'Hardware & Electronics';
    case HEALTH = 'Health';
    case HOUSE_ADS = 'House Ads';
    case PUBLIC_SERVICES = 'Public Services';
    case REMNANT_NETWORKS = 'Remnant Networks';
    case RETAIL_GOODS_SERVICES = 'Retail Goods & Services';
    case SOFTWARE = 'Software';
    case TELECOMMUNICATIONS = 'Telecommunications';
    case TRAVEL = 'Travel';
    case TWITCH = 'Twitch';
    case TWITCH_TV = 'Twitch TV';
    case WEB_MEDIA = 'Web Media';
    case E_COMMERCE = 'eCommerce';

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
