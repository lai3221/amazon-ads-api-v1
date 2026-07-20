<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreProductCollectionASINGrid schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCollectionASINGrid.
 */
final class StoreProductCollectionASINGrid extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCollectionASINGrid';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bulk' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'displayProductGridHeader' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'includeOutOfStock' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'isAutomatedProductGrid' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'keyword' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 60,
        ],
        'sort' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetSectionType::class,
            'required' => true,
            'nullable' => false,
        ],
        'variation' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Whether this is a bulk configuration..
     *
     * @return bool|null
     */
    public function getBulk(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('bulk');

        return $value;
    }

    /**
     * Sets Whether this is a bulk configuration..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setBulk(?bool $value): self
    {
        $this->setAttribute('bulk', $value);

        return $this;
    }

    /**
     * Returns Description of the product grid..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Description of the product grid..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns Whether to display the product grid header..
     *
     * @return bool|null
     */
    public function getDisplayProductGridHeader(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('displayProductGridHeader');

        return $value;
    }

    /**
     * Sets Whether to display the product grid header..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setDisplayProductGridHeader(?bool $value): self
    {
        $this->setAttribute('displayProductGridHeader', $value);

        return $this;
    }

    /**
     * Returns Whether to include out of stock products..
     *
     * @return bool|null
     */
    public function getIncludeOutOfStock(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('includeOutOfStock');

        return $value;
    }

    /**
     * Sets Whether to include out of stock products..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIncludeOutOfStock(?bool $value): self
    {
        $this->setAttribute('includeOutOfStock', $value);

        return $this;
    }

    /**
     * Returns Whether the product grid is automatically populated..
     *
     * @return bool|null
     */
    public function getIsAutomatedProductGrid(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isAutomatedProductGrid');

        return $value;
    }

    /**
     * Sets Whether the product grid is automatically populated..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsAutomatedProductGrid(?bool $value): self
    {
        $this->setAttribute('isAutomatedProductGrid', $value);

        return $this;
    }

    /**
     * Returns Keyword for product filtering..
     *
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('keyword');

        return $value;
    }

    /**
     * Sets Keyword for product filtering..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setKeyword(?string $value): self
    {
        $this->setAttribute('keyword', $value);

        return $this;
    }

    /**
     * Returns List of ASINs, maximum 60 unique items..
     *
     * @return list<string>|null
     */
    public function getProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('productAsins');

        return $value;
    }

    /**
     * Sets List of ASINs, maximum 60 unique items..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setProductAsins(?array $value): self
    {
        $this->setAttribute('productAsins', $value);

        return $this;
    }

    /**
     * Returns Sort order for products..
     *
     * @return string|null
     */
    public function getSort(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('sort');

        return $value;
    }

    /**
     * Sets Sort order for products..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSort(?string $value): self
    {
        $this->setAttribute('sort', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the tile to track performance..
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tag');

        return $value;
    }

    /**
     * Sets Unique tag for the tile to track performance..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTag(?string $value): self
    {
        $this->setAttribute('tag', $value);

        return $this;
    }

    /**
     * Returns Title of the product grid..
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
     * Sets Title of the product grid..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }

    /**
     * Returns the type value.
     *
     * @return StoreWidgetSectionType|null
     */
    public function getType(): ?StoreWidgetSectionType
    {
        /** @var StoreWidgetSectionType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreWidgetSectionType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreWidgetSectionType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }

    /**
     * Returns Variation of the product grid..
     *
     * @return string|null
     */
    public function getVariation(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('variation');

        return $value;
    }

    /**
     * Sets Variation of the product grid..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVariation(?string $value): self
    {
        $this->setAttribute('variation', $value);

        return $this;
    }
}
