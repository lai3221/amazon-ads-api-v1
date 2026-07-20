<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreShoppableImageContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreShoppableImageContent.
 */
final class StoreShoppableImageContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreShoppableImageContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'croppedImage' => [
            'type' => 'model',
            'class' => StoreCroppedImage::class,
            'required' => false,
            'nullable' => false,
        ],
        'points' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StoreShoppablePoint::class,
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
                'class' => StoreTileLayer::class,
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
     * @return StoreCroppedImage|null
     */
    public function getCroppedImage(): ?StoreCroppedImage
    {
        /** @var StoreCroppedImage|null $value */
        $value = $this->getAttribute('croppedImage');

        return $value;
    }

    /**
     * Sets the croppedImage value.
     *
     * @param StoreCroppedImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCroppedImage(StoreCroppedImage|array|null $value): self
    {
        $this->setAttribute('croppedImage', $value);

        return $this;
    }

    /**
     * Returns Interactive points on the image..
     *
     * @return list<StoreShoppablePoint>|null
     */
    public function getPoints(): ?array
    {
        /** @var list<StoreShoppablePoint>|null $value */
        $value = $this->getAttribute('points');

        return $value;
    }

    /**
     * Sets Interactive points on the image..
     *
     * @param list<StoreShoppablePoint>|null $value New property value.
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
     * @return list<StoreTileLayer>|null
     */
    public function getTileLayers(): ?array
    {
        /** @var list<StoreTileLayer>|null $value */
        $value = $this->getAttribute('tileLayers');

        return $value;
    }

    /**
     * Sets Layer configuration for the tile..
     *
     * @param list<StoreTileLayer>|null $value New property value.
     * @return $this
     */
    public function setTileLayers(?array $value): self
    {
        $this->setAttribute('tileLayers', $value);

        return $this;
    }
}
