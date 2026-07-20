<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Terms for a deal. Supports PA & PD deals along with both spend-based guarantees (standard PG) and share-of-voice based guarantees (PG-SOV).
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealTerms.
 */
final class AdvertisingDealTerms extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealTerms';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budget' => [
            'type' => 'model',
            'class' => MonetaryBudget::class,
            'required' => false,
            'nullable' => false,
        ],
        'guaranteed' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'marketplaceDeal' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'price' => [
            'type' => 'model',
            'class' => AdvertisingDealPrice::class,
            'required' => true,
            'nullable' => false,
        ],
        'shareOfVoicePercentage' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budget value.
     *
     * @return MonetaryBudget|null
     */
    public function getBudget(): ?MonetaryBudget
    {
        /** @var MonetaryBudget|null $value */
        $value = $this->getAttribute('budget');

        return $value;
    }

    /**
     * Sets the budget value.
     *
     * @param MonetaryBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudget(MonetaryBudget|array|null $value): self
    {
        $this->setAttribute('budget', $value);

        return $this;
    }

    /**
     * Returns If true, deal is PG Deal..
     *
     * @return bool|null
     */
    public function getGuaranteed(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('guaranteed');

        return $value;
    }

    /**
     * Sets If true, deal is PG Deal..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setGuaranteed(?bool $value): self
    {
        $this->setAttribute('guaranteed', $value);

        return $this;
    }

    /**
     * Returns If true, deal is available to all Amazon DSP entities globally. Marketplace deals cannot be edited by individual buyers..
     *
     * @return bool|null
     */
    public function getMarketplaceDeal(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('marketplaceDeal');

        return $value;
    }

    /**
     * Sets If true, deal is available to all Amazon DSP entities globally. Marketplace deals cannot be edited by individual buyers..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setMarketplaceDeal(?bool $value): self
    {
        $this->setAttribute('marketplaceDeal', $value);

        return $this;
    }

    /**
     * Returns the price value.
     *
     * @return AdvertisingDealPrice|null
     */
    public function getPrice(): ?AdvertisingDealPrice
    {
        /** @var AdvertisingDealPrice|null $value */
        $value = $this->getAttribute('price');

        return $value;
    }

    /**
     * Sets the price value.
     *
     * @param AdvertisingDealPrice|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPrice(AdvertisingDealPrice|array|null $value): self
    {
        $this->setAttribute('price', $value);

        return $this;
    }

    /**
     * Returns Guaranteed Share-of-voice Percentage of the advertising deal. Used for SOV-based PG deals. Value must be 0 and..
     *
     * @return int|float|null
     */
    public function getShareOfVoicePercentage(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('shareOfVoicePercentage');

        return $value;
    }

    /**
     * Sets Guaranteed Share-of-voice Percentage of the advertising deal. Used for SOV-based PG deals. Value must be 0 and..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setShareOfVoicePercentage(int|float|null $value): self
    {
        $this->setAttribute('shareOfVoicePercentage', $value);

        return $this;
    }
}
