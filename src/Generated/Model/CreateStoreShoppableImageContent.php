<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreShoppableImageContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreShoppableImageContent.
 */
final class CreateStoreShoppableImageContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreShoppableImageContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'croppedImage' => [
            'type' => 'model',
            'class' => CreateStoreCroppedImage::class,
            'required' => false,
            'nullable' => false,
        ],
        'points' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreShoppablePoint::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 6,
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
        'renderTileLayers' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'textOption' => [
            'type' => 'enum',
            'class' => StoreShoppableTextOption::class,
            'required' => false,
            'nullable' => false,
        ],
        'tileLayers' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreTileLayer::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the croppedImage value.
     *
     * @return CreateStoreCroppedImage|null
     */
    public function getCroppedImage(): ?CreateStoreCroppedImage
    {
        /** @var CreateStoreCroppedImage|null $value */
        $value = $this->getAttribute('croppedImage');

        return $value;
    }

    /**
     * Sets the croppedImage value.
     *
     * @param CreateStoreCroppedImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCroppedImage(CreateStoreCroppedImage|array|null $value): self
    {
        $this->setAttribute('croppedImage', $value);

        return $this;
    }

    /**
     * Returns Interactive points on the image..
     *
     * @return list<CreateStoreShoppablePoint>|null
     */
    public function getPoints(): ?array
    {
        /** @var list<CreateStoreShoppablePoint>|null $value */
        $value = $this->getAttribute('points');

        return $value;
    }

    /**
     * Sets Interactive points on the image..
     *
     * @param list<CreateStoreShoppablePoint>|null $value New property value.
     * @return $this
     */
    public function setPoints(?array $value): self
    {
        $this->setAttribute('points', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for the point..
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
     * Sets Single ASIN for the point..
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
     * Returns Whether to render tile layers..
     *
     * @return bool|null
     */
    public function getRenderTileLayers(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('renderTileLayers');

        return $value;
    }

    /**
     * Sets Whether to render tile layers..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setRenderTileLayers(?bool $value): self
    {
        $this->setAttribute('renderTileLayers', $value);

        return $this;
    }

    /**
     * Returns the textOption value.
     *
     * @return StoreShoppableTextOption|null
     */
    public function getTextOption(): ?StoreShoppableTextOption
    {
        /** @var StoreShoppableTextOption|null $value */
        $value = $this->getAttribute('textOption');

        return $value;
    }

    /**
     * Sets the textOption value.
     *
     * @param StoreShoppableTextOption|string|null $value New property value.
     * @return $this
     */
    public function setTextOption(StoreShoppableTextOption|string|null $value): self
    {
        $this->setAttribute('textOption', $value);

        return $this;
    }

    /**
     * Returns Layer configuration for the tile..
     *
     * @return list<CreateStoreTileLayer>|null
     */
    public function getTileLayers(): ?array
    {
        /** @var list<CreateStoreTileLayer>|null $value */
        $value = $this->getAttribute('tileLayers');

        return $value;
    }

    /**
     * Sets Layer configuration for the tile..
     *
     * @param list<CreateStoreTileLayer>|null $value New property value.
     * @return $this
     */
    public function setTileLayers(?array $value): self
    {
        $this->setAttribute('tileLayers', $value);

        return $this;
    }
}
