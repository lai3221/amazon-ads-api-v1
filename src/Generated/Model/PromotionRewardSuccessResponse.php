<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionRewardSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionRewardSuccessResponse.
 */
final class PromotionRewardSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionRewardSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'promotionRewards' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PromotionReward::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 25,
        ],
    ];

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }

    /**
     * Returns the promotionRewards value.
     *
     * @return list<PromotionReward>|null
     */
    public function getPromotionRewards(): ?array
    {
        /** @var list<PromotionReward>|null $value */
        $value = $this->getAttribute('promotionRewards');

        return $value;
    }

    /**
     * Sets the promotionRewards value.
     *
     * @param list<PromotionReward>|null $value New property value.
     * @return $this
     */
    public function setPromotionRewards(?array $value): self
    {
        $this->setAttribute('promotionRewards', $value);

        return $this;
    }
}
