<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreTileLayer schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreTileLayer.
 */
final class StoreTileLayer extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTileLayer';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'colorPalette' => [
            'type' => 'enum',
            'class' => StoreColorPalette::class,
            'required' => false,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => StoreTileLayerContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'coverTile' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'margin' => [
            'type' => 'enum',
            'class' => StoreTileBorderSize::class,
            'required' => false,
            'nullable' => false,
        ],
        'opacity' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'outOfBounds' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'padding' => [
            'type' => 'enum',
            'class' => StoreTileBorderSize::class,
            'required' => false,
            'nullable' => false,
        ],
        'position' => [
            'type' => 'model',
            'class' => StoreTilePosition::class,
            'required' => false,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreTileType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the colorPalette value.
     *
     * @return StoreColorPalette|null
     */
    public function getColorPalette(): ?StoreColorPalette
    {
        /** @var StoreColorPalette|null $value */
        $value = $this->getAttribute('colorPalette');

        return $value;
    }

    /**
     * Sets the colorPalette value.
     *
     * @param StoreColorPalette|string|null $value New property value.
     * @return $this
     */
    public function setColorPalette(StoreColorPalette|string|null $value): self
    {
        $this->setAttribute('colorPalette', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return StoreTileLayerContent|null
     */
    public function getContent(): ?StoreTileLayerContent
    {
        /** @var StoreTileLayerContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreTileLayerContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreTileLayerContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

    /**
     * Returns Whether the layer covers the entire tile..
     *
     * @return bool|null
     */
    public function getCoverTile(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('coverTile');

        return $value;
    }

    /**
     * Sets Whether the layer covers the entire tile..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setCoverTile(?bool $value): self
    {
        $this->setAttribute('coverTile', $value);

        return $this;
    }

    /**
     * Returns the margin value.
     *
     * @return StoreTileBorderSize|null
     */
    public function getMargin(): ?StoreTileBorderSize
    {
        /** @var StoreTileBorderSize|null $value */
        $value = $this->getAttribute('margin');

        return $value;
    }

    /**
     * Sets the margin value.
     *
     * @param StoreTileBorderSize|string|null $value New property value.
     * @return $this
     */
    public function setMargin(StoreTileBorderSize|string|null $value): self
    {
        $this->setAttribute('margin', $value);

        return $this;
    }

    /**
     * Returns Opacity level of the layer..
     *
     * @return int|float|null
     */
    public function getOpacity(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('opacity');

        return $value;
    }

    /**
     * Sets Opacity level of the layer..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setOpacity(int|float|null $value): self
    {
        $this->setAttribute('opacity', $value);

        return $this;
    }

    /**
     * Returns Whether the layer is out of bounds..
     *
     * @return bool|null
     */
    public function getOutOfBounds(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('outOfBounds');

        return $value;
    }

    /**
     * Sets Whether the layer is out of bounds..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setOutOfBounds(?bool $value): self
    {
        $this->setAttribute('outOfBounds', $value);

        return $this;
    }

    /**
     * Returns the padding value.
     *
     * @return StoreTileBorderSize|null
     */
    public function getPadding(): ?StoreTileBorderSize
    {
        /** @var StoreTileBorderSize|null $value */
        $value = $this->getAttribute('padding');

        return $value;
    }

    /**
     * Sets the padding value.
     *
     * @param StoreTileBorderSize|string|null $value New property value.
     * @return $this
     */
    public function setPadding(StoreTileBorderSize|string|null $value): self
    {
        $this->setAttribute('padding', $value);

        return $this;
    }

    /**
     * Returns the position value.
     *
     * @return StoreTilePosition|null
     */
    public function getPosition(): ?StoreTilePosition
    {
        /** @var StoreTilePosition|null $value */
        $value = $this->getAttribute('position');

        return $value;
    }

    /**
     * Sets the position value.
     *
     * @param StoreTilePosition|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPosition(StoreTilePosition|array|null $value): self
    {
        $this->setAttribute('position', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the tile layer to track performance..
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
     * Sets Unique tag for the tile layer to track performance..
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
     * Returns the type value.
     *
     * @return StoreTileType|null
     */
    public function getType(): ?StoreTileType
    {
        /** @var StoreTileType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreTileType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreTileType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
