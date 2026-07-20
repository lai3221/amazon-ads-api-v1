<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MonetaryBudgetMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MonetaryBudgetMarketplaceSetting.
 */
final class MonetaryBudgetMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MonetaryBudgetMarketplaceSetting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'monetaryBudget' => [
            'type' => 'model',
            'class' => MonetaryBudget::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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
     * Returns the monetaryBudget value.
     *
     * @return MonetaryBudget|null
     */
    public function getMonetaryBudget(): ?MonetaryBudget
    {
        /** @var MonetaryBudget|null $value */
        $value = $this->getAttribute('monetaryBudget');

        return $value;
    }

    /**
     * Sets the monetaryBudget value.
     *
     * @param MonetaryBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMonetaryBudget(MonetaryBudget|array|null $value): self
    {
        $this->setAttribute('monetaryBudget', $value);

        return $this;
    }
}
