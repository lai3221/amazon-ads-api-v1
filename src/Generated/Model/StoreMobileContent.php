<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreMobileContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreMobileContent.
 */
final class StoreMobileContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreMobileContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetTags' => [
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
        'imageHeight' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'imageKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageOffsetLeft' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'imageOffsetTop' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'imageUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageWidth' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'version' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Asset identifier for mobile view..
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
     * Sets Asset identifier for mobile view..
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
     * Returns Asset tags for mobile view..
     *
     * @return string|null
     */
    public function getAssetTags(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetTags');

        return $value;
    }

    /**
     * Sets Asset tags for mobile view..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetTags(?string $value): self
    {
        $this->setAttribute('assetTags', $value);

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
     * Returns Height of the image for mobile view..
     *
     * @return int|float|null
     */
    public function getImageHeight(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageHeight');

        return $value;
    }

    /**
     * Sets Height of the image for mobile view..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageHeight(int|float|null $value): self
    {
        $this->setAttribute('imageHeight', $value);

        return $this;
    }

    /**
     * Returns Image key for mobile view..
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
     * Sets Image key for mobile view..
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
     * Returns Left offset of the image for mobile view..
     *
     * @return int|float|null
     */
    public function getImageOffsetLeft(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageOffsetLeft');

        return $value;
    }

    /**
     * Sets Left offset of the image for mobile view..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageOffsetLeft(int|float|null $value): self
    {
        $this->setAttribute('imageOffsetLeft', $value);

        return $this;
    }

    /**
     * Returns Top offset of the image for mobile view..
     *
     * @return int|float|null
     */
    public function getImageOffsetTop(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageOffsetTop');

        return $value;
    }

    /**
     * Sets Top offset of the image for mobile view..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageOffsetTop(int|float|null $value): self
    {
        $this->setAttribute('imageOffsetTop', $value);

        return $this;
    }

    /**
     * Returns URL of the image for mobile view..
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
     * Sets URL of the image for mobile view..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageUrl(?string $value): self
    {
        $this->setAttribute('imageUrl', $value);

        return $this;
    }

    /**
     * Returns Width of the image for mobile view..
     *
     * @return int|float|null
     */
    public function getImageWidth(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('imageWidth');

        return $value;
    }

    /**
     * Sets Width of the image for mobile view..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImageWidth(int|float|null $value): self
    {
        $this->setAttribute('imageWidth', $value);

        return $this;
    }

    /**
     * Returns Version identifier for mobile content..
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('version');

        return $value;
    }

    /**
     * Sets Version identifier for mobile content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVersion(?string $value): self
    {
        $this->setAttribute('version', $value);

        return $this;
    }
}
