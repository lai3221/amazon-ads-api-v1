<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreCroppedImage schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreCroppedImage.
 */
final class StoreCroppedImage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreCroppedImage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'altText' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'canvasData' => [
            'type' => 'model',
            'class' => StoreCanvasData::class,
            'required' => false,
            'nullable' => false,
        ],
        'cropBox' => [
            'type' => 'model',
            'class' => StoreCropBoxData::class,
            'required' => false,
            'nullable' => false,
        ],
        'imageKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageNaturalHeight' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'imageNaturalWidth' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'imageUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Alternative text for the image..
     *
     * @return string|null
     */
    public function getAltText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('altText');

        return $value;
    }

    /**
     * Sets Alternative text for the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAltText(?string $value): self
    {
        $this->setAttribute('altText', $value);

        return $this;
    }

    /**
     * Returns Asset identifier..
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetId');

        return $value;
    }

    /**
     * Sets Asset identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetId(?string $value): self
    {
        $this->setAttribute('assetId', $value);

        return $this;
    }

    /**
     * Returns the canvasData value.
     *
     * @return StoreCanvasData|null
     */
    public function getCanvasData(): ?StoreCanvasData
    {
        /** @var StoreCanvasData|null $value */
        $value = $this->getAttribute('canvasData');

        return $value;
    }

    /**
     * Sets the canvasData value.
     *
     * @param StoreCanvasData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCanvasData(StoreCanvasData|array|null $value): self
    {
        $this->setAttribute('canvasData', $value);

        return $this;
    }

    /**
     * Returns the cropBox value.
     *
     * @return StoreCropBoxData|null
     */
    public function getCropBox(): ?StoreCropBoxData
    {
        /** @var StoreCropBoxData|null $value */
        $value = $this->getAttribute('cropBox');

        return $value;
    }

    /**
     * Sets the cropBox value.
     *
     * @param StoreCropBoxData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCropBox(StoreCropBoxData|array|null $value): self
    {
        $this->setAttribute('cropBox', $value);

        return $this;
    }

    /**
     * Returns Key identifier for the image..
     *
     * @return string|null
     */
    public function getImageKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('imageKey');

        return $value;
    }

    /**
     * Sets Key identifier for the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageKey(?string $value): self
    {
        $this->setAttribute('imageKey', $value);

        return $this;
    }

    /**
     * Returns Natural height of the image..
     *
     * @return int|float|null
     */
    public function getImageNaturalHeight(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageNaturalHeight');

        return $value;
    }

    /**
     * Sets Natural height of the image..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageNaturalHeight(int|float|null $value): self
    {
        $this->setAttribute('imageNaturalHeight', $value);

        return $this;
    }

    /**
     * Returns Natural width of the image..
     *
     * @return int|float|null
     */
    public function getImageNaturalWidth(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageNaturalWidth');

        return $value;
    }

    /**
     * Sets Natural width of the image..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageNaturalWidth(int|float|null $value): self
    {
        $this->setAttribute('imageNaturalWidth', $value);

        return $this;
    }

    /**
     * Returns URL of the image..
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('imageUrl');

        return $value;
    }

    /**
     * Sets URL of the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageUrl(?string $value): self
    {
        $this->setAttribute('imageUrl', $value);

        return $this;
    }
}
