<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents an ingredient in a branded recipe.
 *
 * @generated from Amazon Ads API v1 schema BrandedRecipeIngredient.
 */
final class BrandedRecipeIngredient extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandedRecipeIngredient';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'asinOverrides' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'brand' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'displayText' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'isAsinRestricted' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'isBrandRestricted' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'isExclusiveOverride' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'quantityList' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandedRecipeQuantityItem::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
    ];

    /**
     * Returns List of ASIN overrides for the ingredient..
     *
     * @return list<string>|null
     */
    public function getAsinOverrides(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('asinOverrides');

        return $value;
    }

    /**
     * Sets List of ASIN overrides for the ingredient..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAsinOverrides(?array $value): self
    {
        $this->setAttribute('asinOverrides', $value);

        return $this;
    }

    /**
     * Returns Brand name associated with the ingredient..
     *
     * @return string|null
     */
    public function getBrand(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('brand');

        return $value;
    }

    /**
     * Sets Brand name associated with the ingredient..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBrand(?string $value): self
    {
        $this->setAttribute('brand', $value);

        return $this;
    }

    /**
     * Returns Formatted text for displaying the ingredient..
     *
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('displayText');

        return $value;
    }

    /**
     * Sets Formatted text for displaying the ingredient..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDisplayText(?string $value): self
    {
        $this->setAttribute('displayText', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if ASIN is restricted for this ingredient..
     *
     * @return bool|null
     */
    public function getIsAsinRestricted(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isAsinRestricted');

        return $value;
    }

    /**
     * Sets Flag indicating if ASIN is restricted for this ingredient..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsAsinRestricted(?bool $value): self
    {
        $this->setAttribute('isAsinRestricted', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if brand is restricted for this ingredient..
     *
     * @return bool|null
     */
    public function getIsBrandRestricted(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isBrandRestricted');

        return $value;
    }

    /**
     * Sets Flag indicating if brand is restricted for this ingredient..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsBrandRestricted(?bool $value): self
    {
        $this->setAttribute('isBrandRestricted', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if this ingredient has exclusive override..
     *
     * @return bool|null
     */
    public function getIsExclusiveOverride(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isExclusiveOverride');

        return $value;
    }

    /**
     * Sets Flag indicating if this ingredient has exclusive override..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsExclusiveOverride(?bool $value): self
    {
        $this->setAttribute('isExclusiveOverride', $value);

        return $this;
    }

    /**
     * Returns Name of the ingredient..
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
     * Sets Name of the ingredient..
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
     * Returns List of quantity measurements for the ingredient..
     *
     * @return list<BrandedRecipeQuantityItem>|null
     */
    public function getQuantityList(): ?array
    {
        /** @var list<BrandedRecipeQuantityItem>|null $value */
        $value = $this->getAttribute('quantityList');

        return $value;
    }

    /**
     * Sets List of quantity measurements for the ingredient..
     *
     * @param list<BrandedRecipeQuantityItem>|null $value New property value.
     * @return $this
     */
    public function setQuantityList(?array $value): self
    {
        $this->setAttribute('quantityList', $value);

        return $this;
    }
}
