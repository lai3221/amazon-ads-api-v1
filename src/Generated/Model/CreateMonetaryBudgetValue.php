<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMonetaryBudgetValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMonetaryBudgetValue.
 */
final class CreateMonetaryBudgetValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMonetaryBudgetValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateMonetaryBudgetMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'monetaryBudget' => [
            'type' => 'model',
            'class' => CreateMonetaryBudget::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns List of Monetary Budget values selectively applied at the given marketplace level..
     *
     * @return list<CreateMonetaryBudgetMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<CreateMonetaryBudgetMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets List of Monetary Budget values selectively applied at the given marketplace level..
     *
     * @param list<CreateMonetaryBudgetMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

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
