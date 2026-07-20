<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Contains metadata information for recipe ingredients.
 *
 * @generated from Amazon Ads API v1 schema BrandedRecipeIngredientsMetadata.
 */
final class BrandedRecipeIngredientsMetadata extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandedRecipeIngredientsMetadata';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'priorityAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PriorityAsin::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'quantity' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'searchText' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'translatedUnit' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns List of priority ASINs for ingredients with detailed product information..
     *
     * @return list<PriorityAsin>|null
     */
    public function getPriorityAsins(): ?array
    {
        /** @var list<PriorityAsin>|null $value */
        $value = $this->getAttribute('priorityAsins');

        return $value;
    }

    /**
     * Sets List of priority ASINs for ingredients with detailed product information..
     *
     * @param list<PriorityAsin>|null $value New property value.
     * @return $this
     */
    public function setPriorityAsins(?array $value): self
    {
        $this->setAttribute('priorityAsins', $value);

        return $this;
    }

    /**
     * Returns Quantity amount for the ingredient..
     *
     * @return int|float|null
     */
    public function getQuantity(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('quantity');

        return $value;
    }

    /**
     * Sets Quantity amount for the ingredient..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setQuantity(int|float|null $value): self
    {
        $this->setAttribute('quantity', $value);

        return $this;
    }

    /**
     * Returns Search text for ingredient metadata..
     *
     * @return string|null
     */
    public function getSearchText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('searchText');

        return $value;
    }

    /**
     * Sets Search text for ingredient metadata..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSearchText(?string $value): self
    {
        $this->setAttribute('searchText', $value);

        return $this;
    }

    /**
     * Returns Translated unit of measurement..
     *
     * @return string|null
     */
    public function getTranslatedUnit(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('translatedUnit');

        return $value;
    }

    /**
     * Sets Translated unit of measurement..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTranslatedUnit(?string $value): self
    {
        $this->setAttribute('translatedUnit', $value);

        return $this;
    }
}
