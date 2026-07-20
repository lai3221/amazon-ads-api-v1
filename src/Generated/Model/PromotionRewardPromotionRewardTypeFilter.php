<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionRewardPromotionRewardTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionRewardPromotionRewardTypeFilter.
 */
final class PromotionRewardPromotionRewardTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionRewardPromotionRewardTypeFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => PromotionRewardType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 3,
        ],
    ];

    /**
     * Returns PromotionRewardType Enum: PromotionRewardType Description --- --- ADHOC A direct promotion reward applied to an advertiser account. SIGNUP A promotion reward awarded upon advertiser signup. PROMO CODE A promotion reward redeemed via a promotion code..
     *
     * @return list<PromotionRewardType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<PromotionRewardType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets PromotionRewardType Enum: PromotionRewardType Description --- --- ADHOC A direct promotion reward applied to an advertiser account. SIGNUP A promotion reward awarded upon advertiser signup. PROMO CODE A promotion reward redeemed via a promotion code..
     *
     * @param list<PromotionRewardType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
