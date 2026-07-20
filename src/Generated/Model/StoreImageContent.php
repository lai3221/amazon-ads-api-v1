<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreImageContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreImageContent.
 */
final class StoreImageContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageContent';

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
        'assetTags' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'bleedImage' => [
            'type' => 'enum',
            'class' => StoreBleedImageType::class,
            'required' => false,
            'nullable' => false,
        ],
        'callToAction' => [
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
        'cropBoxData' => [
            'type' => 'model',
            'class' => StoreCropBoxData::class,
            'required' => false,
            'nullable' => false,
        ],
        'customUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'hideTitle' => [
            'type' => 'boolean',
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
        'isAiGen' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'layout' => [
            'type' => 'enum',
            'class' => StoreImageLayout::class,
            'required' => false,
            'nullable' => false,
        ],
        'pageId' => [
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
            'maxItems' => 1,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'textAlign' => [
            'type' => 'enum',
            'class' => StoreImageTextAlign::class,
            'required' => false,
            'nullable' => false,
        ],
        'tileLayers' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'verticalAlign' => [
            'type' => 'enum',
            'class' => StoreVerticalAlign::class,
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
     * Returns Call to action text..
     *
     * @return string|null
     */
    public function getCallToAction(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('callToAction');

        return $value;
    }

    /**
     * Sets Call to action text..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCallToAction(?string $value): self
    {
        $this->setAttribute('callToAction', $value);

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
     * Returns the cropBoxData value.
     *
     * @return StoreCropBoxData|null
     */
    public function getCropBoxData(): ?StoreCropBoxData
    {
        /** @var StoreCropBoxData|null $value */
        $value = $this->getAttribute('cropBoxData');

        return $value;
    }

    /**
     * Sets the cropBoxData value.
     *
     * @param StoreCropBoxData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCropBoxData(StoreCropBoxData|array|null $value): self
    {
        $this->setAttribute('cropBoxData', $value);

        return $this;
    }

    /**
     * Returns Custom URL..
     *
     * @return string|null
     */
    public function getCustomUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('customUrl');

        return $value;
    }

    /**
     * Sets Custom URL..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCustomUrl(?string $value): self
    {
        $this->setAttribute('customUrl', $value);

        return $this;
    }

    /**
     * Returns Whether to hide the title..
     *
     * @return bool|null
     */
    public function getHideTitle(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('hideTitle');

        return $value;
    }

    /**
     * Sets Whether to hide the title..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setHideTitle(?bool $value): self
    {
        $this->setAttribute('hideTitle', $value);

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
     * Returns Whether the image is AI-generated..
     *
     * @return bool|null
     */
    public function getIsAiGen(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isAiGen');

        return $value;
    }

    /**
     * Sets Whether the image is AI-generated..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsAiGen(?bool $value): self
    {
        $this->setAttribute('isAiGen', $value);

        return $this;
    }

    /**
     * Returns the layout value.
     *
     * @return StoreImageLayout|null
     */
    public function getLayout(): ?StoreImageLayout
    {
        /** @var StoreImageLayout|null $value */
        $value = $this->getAttribute('layout');

        return $value;
    }

    /**
     * Sets the layout value.
     *
     * @param StoreImageLayout|string|null $value New property value.
     * @return $this
     */
    public function setLayout(StoreImageLayout|string|null $value): self
    {
        $this->setAttribute('layout', $value);

        return $this;
    }

    /**
     * Returns Page identifier..
     *
     * @return string|null
     */
    public function getPageId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pageId');

        return $value;
    }

    /**
     * Sets Page identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPageId(?string $value): self
    {
        $this->setAttribute('pageId', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for the image..
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
     * Sets Single ASIN for the image..
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
     * Returns Text content..
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
     * Sets Text content..
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
     * @return StoreImageTextAlign|null
     */
    public function getTextAlign(): ?StoreImageTextAlign
    {
        /** @var StoreImageTextAlign|null $value */
        $value = $this->getAttribute('textAlign');

        return $value;
    }

    /**
     * Sets the textAlign value.
     *
     * @param StoreImageTextAlign|string|null $value New property value.
     * @return $this
     */
    public function setTextAlign(StoreImageTextAlign|string|null $value): self
    {
        $this->setAttribute('textAlign', $value);

        return $this;
    }

    /**
     * Returns Layer configuration for the tile..
     *
     * @return list<string>|null
     */
    public function getTileLayers(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('tileLayers');

        return $value;
    }

    /**
     * Sets Layer configuration for the tile..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setTileLayers(?array $value): self
    {
        $this->setAttribute('tileLayers', $value);

        return $this;
    }

    /**
     * Returns Title of the image..
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
     * Sets Title of the image..
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
     * Returns the verticalAlign value.
     *
     * @return StoreVerticalAlign|null
     */
    public function getVerticalAlign(): ?StoreVerticalAlign
    {
        /** @var StoreVerticalAlign|null $value */
        $value = $this->getAttribute('verticalAlign');

        return $value;
    }

    /**
     * Sets the verticalAlign value.
     *
     * @param StoreVerticalAlign|string|null $value New property value.
     * @return $this
     */
    public function setVerticalAlign(StoreVerticalAlign|string|null $value): self
    {
        $this->setAttribute('verticalAlign', $value);

        return $this;
    }
}
