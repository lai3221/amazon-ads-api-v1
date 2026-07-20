<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Main widget structure for displaying a branded recipe.
 *
 * @generated from Amazon Ads API v1 schema BrandedRecipeWidget.
 */
final class BrandedRecipeWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandedRecipeWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'availableProductAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'desktopMedia' => [
            'type' => 'model',
            'class' => BrandedRecipeMedia::class,
            'required' => false,
            'nullable' => false,
        ],
        'directions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandedRecipeDirection::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'encodedIngredientComposition' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'ingredientMetadata' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandedRecipeIngredientsMetadata::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'ingredients' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandedRecipeIngredient::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'isInitialLoad' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'mobileMedia' => [
            'type' => 'model',
            'class' => BrandedRecipeMedia::class,
            'required' => false,
            'nullable' => false,
        ],
        'preparationTime' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'refTag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'servingSize' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns List of available product ASINs..
     *
     * @return list<string>|null
     */
    public function getAvailableProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('availableProductAsins');

        return $value;
    }

    /**
     * Sets List of available product ASINs..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAvailableProductAsins(?array $value): self
    {
        $this->setAttribute('availableProductAsins', $value);

        return $this;
    }

    /**
     * Returns the desktopMedia value.
     *
     * @return BrandedRecipeMedia|null
     */
    public function getDesktopMedia(): ?BrandedRecipeMedia
    {
        /** @var BrandedRecipeMedia|null $value */
        $value = $this->getAttribute('desktopMedia');

        return $value;
    }

    /**
     * Sets the desktopMedia value.
     *
     * @param BrandedRecipeMedia|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDesktopMedia(BrandedRecipeMedia|array|null $value): self
    {
        $this->setAttribute('desktopMedia', $value);

        return $this;
    }

    /**
     * Returns List of preparation directions for the recipe..
     *
     * @return list<BrandedRecipeDirection>|null
     */
    public function getDirections(): ?array
    {
        /** @var list<BrandedRecipeDirection>|null $value */
        $value = $this->getAttribute('directions');

        return $value;
    }

    /**
     * Sets List of preparation directions for the recipe..
     *
     * @param list<BrandedRecipeDirection>|null $value New property value.
     * @return $this
     */
    public function setDirections(?array $value): self
    {
        $this->setAttribute('directions', $value);

        return $this;
    }

    /**
     * Returns Encoded string containing ingredient composition details..
     *
     * @return string|null
     */
    public function getEncodedIngredientComposition(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('encodedIngredientComposition');

        return $value;
    }

    /**
     * Sets Encoded string containing ingredient composition details..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEncodedIngredientComposition(?string $value): self
    {
        $this->setAttribute('encodedIngredientComposition', $value);

        return $this;
    }

    /**
     * Returns Metadata associated with recipe ingredients..
     *
     * @return list<BrandedRecipeIngredientsMetadata>|null
     */
    public function getIngredientMetadata(): ?array
    {
        /** @var list<BrandedRecipeIngredientsMetadata>|null $value */
        $value = $this->getAttribute('ingredientMetadata');

        return $value;
    }

    /**
     * Sets Metadata associated with recipe ingredients..
     *
     * @param list<BrandedRecipeIngredientsMetadata>|null $value New property value.
     * @return $this
     */
    public function setIngredientMetadata(?array $value): self
    {
        $this->setAttribute('ingredientMetadata', $value);

        return $this;
    }

    /**
     * Returns List of ingredients required for the recipe..
     *
     * @return list<BrandedRecipeIngredient>|null
     */
    public function getIngredients(): ?array
    {
        /** @var list<BrandedRecipeIngredient>|null $value */
        $value = $this->getAttribute('ingredients');

        return $value;
    }

    /**
     * Sets List of ingredients required for the recipe..
     *
     * @param list<BrandedRecipeIngredient>|null $value New property value.
     * @return $this
     */
    public function setIngredients(?array $value): self
    {
        $this->setAttribute('ingredients', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if recipe is set to initial load..
     *
     * @return bool|null
     */
    public function getIsInitialLoad(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isInitialLoad');

        return $value;
    }

    /**
     * Sets Flag indicating if recipe is set to initial load..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsInitialLoad(?bool $value): self
    {
        $this->setAttribute('isInitialLoad', $value);

        return $this;
    }

    /**
     * Returns the mobileMedia value.
     *
     * @return BrandedRecipeMedia|null
     */
    public function getMobileMedia(): ?BrandedRecipeMedia
    {
        /** @var BrandedRecipeMedia|null $value */
        $value = $this->getAttribute('mobileMedia');

        return $value;
    }

    /**
     * Sets the mobileMedia value.
     *
     * @param BrandedRecipeMedia|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobileMedia(BrandedRecipeMedia|array|null $value): self
    {
        $this->setAttribute('mobileMedia', $value);

        return $this;
    }

    /**
     * Returns Time required to prepare the recipe..
     *
     * @return string|null
     */
    public function getPreparationTime(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('preparationTime');

        return $value;
    }

    /**
     * Sets Time required to prepare the recipe..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPreparationTime(?string $value): self
    {
        $this->setAttribute('preparationTime', $value);

        return $this;
    }

    /**
     * Returns REF tracking tag for the branded recipe..
     *
     * @return string|null
     */
    public function getRefTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('refTag');

        return $value;
    }

    /**
     * Sets REF tracking tag for the branded recipe..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRefTag(?string $value): self
    {
        $this->setAttribute('refTag', $value);

        return $this;
    }

    /**
     * Returns Number of servings the recipe yields..
     *
     * @return int|float|null
     */
    public function getServingSize(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('servingSize');

        return $value;
    }

    /**
     * Sets Number of servings the recipe yields..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setServingSize(int|float|null $value): self
    {
        $this->setAttribute('servingSize', $value);

        return $this;
    }

    /**
     * Returns Title of the recipe..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Title of the recipe..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }
}
