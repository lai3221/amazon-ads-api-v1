<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MonetaryBudgetValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MonetaryBudgetValue.
 */
final class MonetaryBudgetValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MonetaryBudgetValue';

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
                'class' => MonetaryBudgetMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'monetaryBudget' => [
            'type' => 'model',
            'class' => MonetaryBudget::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns List of Monetary Budget values selectively applied at the given marketplace level..
     *
     * @return list<MonetaryBudgetMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<MonetaryBudgetMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets List of Monetary Budget values selectively applied at the given marketplace level..
     *
     * @param list<MonetaryBudgetMarketplaceSetting>|null $value New property value.
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
