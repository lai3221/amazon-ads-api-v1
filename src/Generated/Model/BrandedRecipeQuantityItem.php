<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents a quantity measurement for a recipe ingredient.
 *
 * @generated from Amazon Ads API v1 schema BrandedRecipeQuantityItem.
 */
final class BrandedRecipeQuantityItem extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandedRecipeQuantityItem';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'amount' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'unit' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Numerical amount of the ingredient..
     *
     * @return int|float|null
     */
    public function getAmount(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('amount');

        return $value;
    }

    /**
     * Sets Numerical amount of the ingredient..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setAmount(int|float|null $value): self
    {
        $this->setAttribute('amount', $value);

        return $this;
    }

    /**
     * Returns Unit of measurement for the ingredient..
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('unit');

        return $value;
    }

    /**
     * Sets Unit of measurement for the ingredient..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUnit(?string $value): self
    {
        $this->setAttribute('unit', $value);

        return $this;
    }
}
