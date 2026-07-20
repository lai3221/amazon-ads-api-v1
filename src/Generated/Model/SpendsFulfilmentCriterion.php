<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SpendsFulfilmentCriterion schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SpendsFulfilmentCriterion.
 */
final class SpendsFulfilmentCriterion extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SpendsFulfilmentCriterion';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'spend' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => CriterionStatus::class,
            'required' => true,
            'nullable' => false,
        ],
        'tiers' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SpendsTier::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 3,
        ],
    ];

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
     * Returns The deadline by which the spend threshold must be met. This is only populated after the campaign is launched..
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
     * Sets The deadline by which the spend threshold must be met. This is only populated after the campaign is launched..
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
     * Returns The current amount spent by the advertiser towards meeting the spend threshold. This is only populated after the campaign is launched..
     *
     * @return int|float|null
     */
    public function getSpend(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('spend');

        return $value;
    }

    /**
     * Sets The current amount spent by the advertiser towards meeting the spend threshold. This is only populated after the campaign is launched..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setSpend(int|float|null $value): self
    {
        $this->setAttribute('spend', $value);

        return $this;
    }

    /**
     * Returns The date from which advertiser spends start being tracked towards the threshold. This is only populated after the campaign is launched..
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
     * Sets The date from which advertiser spends start being tracked towards the threshold. This is only populated after the campaign is launched..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return CriterionStatus|null
     */
    public function getStatus(): ?CriterionStatus
    {
        /** @var CriterionStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param CriterionStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(CriterionStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }

    /**
     * Returns Different spend threshold tiers with corresponding reward amounts associated to the same promotion offer..
     *
     * @return list<SpendsTier>|null
     */
    public function getTiers(): ?array
    {
        /** @var list<SpendsTier>|null $value */
        $value = $this->getAttribute('tiers');

        return $value;
    }

    /**
     * Sets Different spend threshold tiers with corresponding reward amounts associated to the same promotion offer..
     *
     * @param list<SpendsTier>|null $value New property value.
     * @return $this
     */
    public function setTiers(?array $value): self
    {
        $this->setAttribute('tiers', $value);

        return $this;
    }
}
