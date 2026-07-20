<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionReward schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionReward.
 */
final class PromotionReward extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionReward';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserAccountId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'includePromotionRewardConsumption' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'promotionRewardConsumptions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PromotionRewardConsumption::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'promotionRewardId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'promotionRewardType' => [
            'type' => 'enum',
            'class' => PromotionRewardType::class,
            'required' => true,
            'nullable' => false,
        ],
        'remainingReward' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'reward' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The advertiser account associated with the promotion reward..
     *
     * @return string|null
     */
    public function getAdvertiserAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertiserAccountId');

        return $value;
    }

    /**
     * Sets The advertiser account associated with the promotion reward..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccountId(?string $value): self
    {
        $this->setAttribute('advertiserAccountId', $value);

        return $this;
    }

    /**
     * Returns the currencyCode value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyCode');

        return $value;
    }

    /**
     * Sets the currencyCode value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyCode(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyCode', $value);

        return $this;
    }

    /**
     * Returns The date and time by which the promotion reward expires..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDateTime');

        return $value;
    }

    /**
     * Sets The date and time by which the promotion reward expires..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDateTime', $value);

        return $this;
    }

    /**
     * Returns Whether per-invoice consumption details are included in the response..
     *
     * @return bool|null
     */
    public function getIncludePromotionRewardConsumption(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('includePromotionRewardConsumption');

        return $value;
    }

    /**
     * Sets Whether per-invoice consumption details are included in the response..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIncludePromotionRewardConsumption(?bool $value): self
    {
        $this->setAttribute('includePromotionRewardConsumption', $value);

        return $this;
    }

    /**
     * Returns the marketplace value.
     *
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('marketplace');

        return $value;
    }

    /**
     * Sets the marketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('marketplace', $value);

        return $this;
    }

    /**
     * Returns The display name of the promotion reward..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets The display name of the promotion reward..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns The per-invoice consumption details of the promotion reward..
     *
     * @return list<PromotionRewardConsumption>|null
     */
    public function getPromotionRewardConsumptions(): ?array
    {
        /** @var list<PromotionRewardConsumption>|null $value */
        $value = $this->getAttribute('promotionRewardConsumptions');

        return $value;
    }

    /**
     * Sets The per-invoice consumption details of the promotion reward..
     *
     * @param list<PromotionRewardConsumption>|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardConsumptions(?array $value): self
    {
        $this->setAttribute('promotionRewardConsumptions', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the promotion reward..
     *
     * @return string|null
     */
    public function getPromotionRewardId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionRewardId');

        return $value;
    }

    /**
     * Sets A unique identifier for the promotion reward..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardId(?string $value): self
    {
        $this->setAttribute('promotionRewardId', $value);

        return $this;
    }

    /**
     * Returns the promotionRewardType value.
     *
     * @return PromotionRewardType|null
     */
    public function getPromotionRewardType(): ?PromotionRewardType
    {
        /** @var PromotionRewardType|null $value */
        $value = $this->getAttribute('promotionRewardType');

        return $value;
    }

    /**
     * Sets the promotionRewardType value.
     *
     * @param PromotionRewardType|string|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardType(PromotionRewardType|string|null $value): self
    {
        $this->setAttribute('promotionRewardType', $value);

        return $this;
    }

    /**
     * Returns The click credits amount of the promotion reward not yet consumed..
     *
     * @return int|float|null
     */
    public function getRemainingReward(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('remainingReward');

        return $value;
    }

    /**
     * Sets The click credits amount of the promotion reward not yet consumed..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setRemainingReward(int|float|null $value): self
    {
        $this->setAttribute('remainingReward', $value);

        return $this;
    }

    /**
     * Returns The total click credits amount of the promotion reward..
     *
     * @return int|float|null
     */
    public function getReward(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('reward');

        return $value;
    }

    /**
     * Sets The total click credits amount of the promotion reward..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setReward(int|float|null $value): self
    {
        $this->setAttribute('reward', $value);

        return $this;
    }

    /**
     * Returns The date and time from which the promotion reward is active and eligible for consumption..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDateTime');

        return $value;
    }

    /**
     * Sets The date and time from which the promotion reward is active and eligible for consumption..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }
}
