<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreProductTileContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreProductTileContent.
 */
final class CreateStoreProductTileContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreProductTileContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bleedImage' => [
            'type' => 'enum',
            'class' => StoreBleedImageType::class,
            'required' => false,
            'nullable' => false,
        ],
        'displayOutOfStockASIN' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'layout' => [
            'type' => 'enum',
            'class' => StoreLayoutType::class,
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
            'maxItems' => 1,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'textAlign' => [
            'type' => 'enum',
            'class' => StoreTextAlignment::class,
            'required' => false,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the bleedImage value.
     *
     * @return StoreBleedImageType|null
     */
    public function getBleedImage(): ?StoreBleedImageType
    {
        /** @var StoreBleedImageType|null $value */
        $value = $this->getAttribute('bleedImage');

        return $value;
    }

    /**
     * Sets the bleedImage value.
     *
     * @param StoreBleedImageType|string|null $value New property value.
     * @return $this
     */
    public function setBleedImage(StoreBleedImageType|string|null $value): self
    {
        $this->setAttribute('bleedImage', $value);

        return $this;
    }

    /**
     * Returns Whether to display out of stock ASIN..
     *
     * @return bool|null
     */
    public function getDisplayOutOfStockASIN(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('displayOutOfStockASIN');

        return $value;
    }

    /**
     * Sets Whether to display out of stock ASIN..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setDisplayOutOfStockASIN(?bool $value): self
    {
        $this->setAttribute('displayOutOfStockASIN', $value);

        return $this;
    }

    /**
     * Returns the layout value.
     *
     * @return StoreLayoutType|null
     */
    public function getLayout(): ?StoreLayoutType
    {
        /** @var StoreLayoutType|null $value */
        $value = $this->getAttribute('layout');

        return $value;
    }

    /**
     * Sets the layout value.
     *
     * @param StoreLayoutType|string|null $value New property value.
     * @return $this
     */
    public function setLayout(StoreLayoutType|string|null $value): self
    {
        $this->setAttribute('layout', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for the product..
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
     * Sets Single ASIN for the product..
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
     * Returns Description text for the product..
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
     * Sets Description text for the product..
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
     * Returns the textAlign value.
     *
     * @return StoreTextAlignment|null
     */
    public function getTextAlign(): ?StoreTextAlignment
    {
        /** @var StoreTextAlignment|null $value */
        $value = $this->getAttribute('textAlign');

        return $value;
    }

    /**
     * Sets the textAlign value.
     *
     * @param StoreTextAlignment|string|null $value New property value.
     * @return $this
     */
    public function setTextAlign(StoreTextAlignment|string|null $value): self
    {
        $this->setAttribute('textAlign', $value);

        return $this;
    }

    /**
     * Returns Title of the product..
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
     * Sets Title of the product..
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
