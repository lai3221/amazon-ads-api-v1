<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Terms for a deal. Supports PA & PD deals along with both spend-based guarantees (standard PG) and share-of-voice based guarantees (PG-SOV).
 *
 * @generated from Amazon Ads API v1 schema CreateAdvertisingDealTerms.
 */
final class CreateAdvertisingDealTerms extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdvertisingDealTerms';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budget' => [
            'type' => 'model',
            'class' => CreateMonetaryBudget::class,
            'required' => false,
            'nullable' => false,
        ],
        'price' => [
            'type' => 'model',
            'class' => CreateAdvertisingDealPrice::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budget value.
     *
     * @return CreateMonetaryBudget|null
     */
    public function getBudget(): ?CreateMonetaryBudget
    {
        /** @var CreateMonetaryBudget|null $value */
        $value = $this->getAttribute('budget');

        return $value;
    }

    /**
     * Sets the budget value.
     *
     * @param CreateMonetaryBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudget(CreateMonetaryBudget|array|null $value): self
    {
        $this->setAttribute('budget', $value);

        return $this;
    }

    /**
     * Returns the price value.
     *
     * @return CreateAdvertisingDealPrice|null
     */
    public function getPrice(): ?CreateAdvertisingDealPrice
    {
        /** @var CreateAdvertisingDealPrice|null $value */
        $value = $this->getAttribute('price');

        return $value;
    }

    /**
     * Sets the price value.
     *
     * @param CreateAdvertisingDealPrice|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPrice(CreateAdvertisingDealPrice|array|null $value): self
    {
        $this->setAttribute('price', $value);

        return $this;
    }
}
