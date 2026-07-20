<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreImageSlide schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreImageSlide.
 */
final class CreateStoreImageSlide extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreImageSlide';

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
            'class' => CreateStoreCanvasData::class,
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
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreSlideType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

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
     * Returns Tags associated with the asset..
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
     * Sets Tags associated with the asset..
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
     * @return CreateStoreCanvasData|null
     */
    public function getCanvasData(): ?CreateStoreCanvasData
    {
        /** @var CreateStoreCanvasData|null $value */
        $value = $this->getAttribute('canvasData');

        return $value;
    }

    /**
     * Sets the canvasData value.
     *
     * @param CreateStoreCanvasData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCanvasData(CreateStoreCanvasData|array|null $value): self
    {
        $this->setAttribute('canvasData', $value);

        return $this;
    }

    /**
     * Returns Height of the image..
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
     * Sets Height of the image..
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
     * Returns Left offset for image positioning..
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
     * Sets Left offset for image positioning..
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
     * Returns Top offset for image positioning..
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
     * Sets Top offset for image positioning..
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

    /**
     * Returns Width of the image..
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
     * Sets Width of the image..
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
     * Returns Unique identifier for the slide..
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
     * Sets Unique identifier for the slide..
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
     * @return StoreSlideType|null
     */
    public function getType(): ?StoreSlideType
    {
        /** @var StoreSlideType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreSlideType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreSlideType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
