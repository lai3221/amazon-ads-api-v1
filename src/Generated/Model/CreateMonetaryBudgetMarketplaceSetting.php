<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMonetaryBudgetMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMonetaryBudgetMarketplaceSetting.
 */
final class CreateMonetaryBudgetMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMonetaryBudgetMarketplaceSetting';

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
            'class' => CreateMonetaryBudget::class,
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
     * @return CreateMonetaryBudget|null
     */
    public function getMonetaryBudget(): ?CreateMonetaryBudget
    {
        /** @var CreateMonetaryBudget|null $value */
        $value = $this->getAttribute('monetaryBudget');

        return $value;
    }

    /**
     * Sets the monetaryBudget value.
     *
     * @param CreateMonetaryBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMonetaryBudget(CreateMonetaryBudget|array|null $value): self
    {
        $this->setAttribute('monetaryBudget', $value);

        return $this;
    }
}
