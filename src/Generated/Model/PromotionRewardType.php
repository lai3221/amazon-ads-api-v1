<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * The type of a promotion reward. PromotionRewardType Enum: PromotionRewardType Description --- --- ADHOC A direct promotion reward applied to an advertiser account. SIGNUP A promotion reward awarded upon advertiser signup. PROMO CODE A promotion reward redee.
 *
 * @generated from Amazon Ads API v1 schema PromotionRewardType.
 */
enum PromotionRewardType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionRewardType';

    case ADHOC = 'ADHOC';
    case PROMO_CODE = 'PROMO_CODE';
    case SIGNUP = 'SIGNUP';

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
