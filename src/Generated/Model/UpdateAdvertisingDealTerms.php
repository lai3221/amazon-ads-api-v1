<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Terms for a deal. Supports PA & PD deals along with both spend-based guarantees (standard PG) and share-of-voice based guarantees (PG-SOV).
 *
 * @generated from Amazon Ads API v1 schema UpdateAdvertisingDealTerms.
 */
final class UpdateAdvertisingDealTerms extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdvertisingDealTerms';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budget' => [
            'type' => 'model',
            'class' => UpdateMonetaryBudget::class,
            'required' => false,
            'nullable' => false,
        ],
        'price' => [
            'type' => 'model',
            'class' => UpdateAdvertisingDealPrice::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budget value.
     *
     * @return UpdateMonetaryBudget|null
     */
    public function getBudget(): ?UpdateMonetaryBudget
    {
        /** @var UpdateMonetaryBudget|null $value */
        $value = $this->getAttribute('budget');

        return $value;
    }

    /**
     * Sets the budget value.
     *
     * @param UpdateMonetaryBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudget(UpdateMonetaryBudget|array|null $value): self
    {
        $this->setAttribute('budget', $value);

        return $this;
    }

    /**
     * Returns the price value.
     *
     * @return UpdateAdvertisingDealPrice|null
     */
    public function getPrice(): ?UpdateAdvertisingDealPrice
    {
        /** @var UpdateAdvertisingDealPrice|null $value */
        $value = $this->getAttribute('price');

        return $value;
    }

    /**
     * Sets the price value.
     *
     * @param UpdateAdvertisingDealPrice|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPrice(UpdateAdvertisingDealPrice|array|null $value): self
    {
        $this->setAttribute('price', $value);

        return $this;
    }
}
