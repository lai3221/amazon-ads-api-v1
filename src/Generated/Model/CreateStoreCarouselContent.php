<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreCarouselContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreCarouselContent.
 */
final class CreateStoreCarouselContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreCarouselContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bulk' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'callToActionData' => [
            'type' => 'model',
            'class' => CreateStoreCallToActionData::class,
            'required' => true,
            'nullable' => false,
        ],
        'includeOutOfStock' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'keyword' => [
            'type' => 'string',
            'required' => true,
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
            'maxItems' => 500,
        ],
        'search' => [
            'type' => 'model',
            'class' => CreateStoreCarouselSearch::class,
            'required' => false,
            'nullable' => false,
        ],
        'slides' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreASINSlide::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'tag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetSectionType::class,
            'required' => true,
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
     * Returns the callToActionData value.
     *
     * @return CreateStoreCallToActionData|null
     */
    public function getCallToActionData(): ?CreateStoreCallToActionData
    {
        /** @var CreateStoreCallToActionData|null $value */
        $value = $this->getAttribute('callToActionData');

        return $value;
    }

    /**
     * Sets the callToActionData value.
     *
     * @param CreateStoreCallToActionData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToActionData(CreateStoreCallToActionData|array|null $value): self
    {
        $this->setAttribute('callToActionData', $value);

        return $this;
    }

    /**
     * Returns Whether to include out of stock items..
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
     * Sets Whether to include out of stock items..
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
     * Returns List of ASINs, maximum 500 unique items..
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
     * Sets List of ASINs, maximum 500 unique items..
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
     * Returns the search value.
     *
     * @return CreateStoreCarouselSearch|null
     */
    public function getSearch(): ?CreateStoreCarouselSearch
    {
        /** @var CreateStoreCarouselSearch|null $value */
        $value = $this->getAttribute('search');

        return $value;
    }

    /**
     * Sets the search value.
     *
     * @param CreateStoreCarouselSearch|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSearch(CreateStoreCarouselSearch|array|null $value): self
    {
        $this->setAttribute('search', $value);

        return $this;
    }

    /**
     * Returns List of ASIN slides..
     *
     * @return list<CreateStoreASINSlide>|null
     */
    public function getSlides(): ?array
    {
        /** @var list<CreateStoreASINSlide>|null $value */
        $value = $this->getAttribute('slides');

        return $value;
    }

    /**
     * Sets List of ASIN slides..
     *
     * @param list<CreateStoreASINSlide>|null $value New property value.
     * @return $this
     */
    public function setSlides(?array $value): self
    {
        $this->setAttribute('slides', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the content to track performance..
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
     * Sets Unique tag for the content to track performance..
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
     * Returns Description text..
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('text');

        return $value;
    }

    /**
     * Sets Description text..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setText(?string $value): self
    {
        $this->setAttribute('text', $value);

        return $this;
    }

    /**
     * Returns Title of the carousel..
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
     * Sets Title of the carousel..
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
}
