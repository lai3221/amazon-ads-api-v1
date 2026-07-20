<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreVideoContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreVideoContent.
 */
final class CreateStoreVideoContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreVideoContent';

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
        'autoPlay' => [
            'type' => 'boolean',
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
            'class' => CreateStoreCanvasData::class,
            'required' => false,
            'nullable' => false,
        ],
        'customUrl' => [
            'type' => 'string',
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
        'mute' => [
            'type' => 'boolean',
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
        'renderTileLayers' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'resourceId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'textAlign' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'textOption' => [
            'type' => 'enum',
            'class' => StoreTextOptionType::class,
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
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoAssetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoAssetTags' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoDescription' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoSize' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'videoUrl' => [
            'type' => 'string',
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
     * Returns Whether video should auto-play..
     *
     * @return bool|null
     */
    public function getAutoPlay(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('autoPlay');

        return $value;
    }

    /**
     * Sets Whether video should auto-play..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAutoPlay(?bool $value): self
    {
        $this->setAttribute('autoPlay', $value);

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
     * Returns Custom URL for the content..
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
     * Sets Custom URL for the content..
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
     * Returns Key for the image asset..
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
     * Sets Key for the image asset..
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
     * Returns Whether video should be muted..
     *
     * @return bool|null
     */
    public function getMute(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('mute');

        return $value;
    }

    /**
     * Sets Whether video should be muted..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setMute(?bool $value): self
    {
        $this->setAttribute('mute', $value);

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
     * Returns List of product ASINs..
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
     * Sets List of product ASINs..
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
     * Returns Resource identifier..
     *
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('resourceId');

        return $value;
    }

    /**
     * Sets Resource identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setResourceId(?string $value): self
    {
        $this->setAttribute('resourceId', $value);

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
     * Returns Text alignment..
     *
     * @return string|null
     */
    public function getTextAlign(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('textAlign');

        return $value;
    }

    /**
     * Sets Text alignment..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTextAlign(?string $value): self
    {
        $this->setAttribute('textAlign', $value);

        return $this;
    }

    /**
     * Returns the textOption value.
     *
     * @return StoreTextOptionType|null
     */
    public function getTextOption(): ?StoreTextOptionType
    {
        /** @var StoreTextOptionType|null $value */
        $value = $this->getAttribute('textOption');

        return $value;
    }

    /**
     * Sets the textOption value.
     *
     * @param StoreTextOptionType|string|null $value New property value.
     * @return $this
     */
    public function setTextOption(StoreTextOptionType|string|null $value): self
    {
        $this->setAttribute('textOption', $value);

        return $this;
    }

    /**
     * Returns Configuration for tile layers..
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
     * Sets Configuration for tile layers..
     *
     * @param list<CreateStoreTileLayer>|null $value New property value.
     * @return $this
     */
    public function setTileLayers(?array $value): self
    {
        $this->setAttribute('tileLayers', $value);

        return $this;
    }

    /**
     * Returns Title of the content..
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
     * Sets Title of the content..
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
     * Returns Video asset identifier..
     *
     * @return string|null
     */
    public function getVideoAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoAssetId');

        return $value;
    }

    /**
     * Sets Video asset identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoAssetId(?string $value): self
    {
        $this->setAttribute('videoAssetId', $value);

        return $this;
    }

    /**
     * Returns Tags associated with the video asset..
     *
     * @return string|null
     */
    public function getVideoAssetTags(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoAssetTags');

        return $value;
    }

    /**
     * Sets Tags associated with the video asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoAssetTags(?string $value): self
    {
        $this->setAttribute('videoAssetTags', $value);

        return $this;
    }

    /**
     * Returns Description of the video..
     *
     * @return string|null
     */
    public function getVideoDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoDescription');

        return $value;
    }

    /**
     * Sets Description of the video..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoDescription(?string $value): self
    {
        $this->setAttribute('videoDescription', $value);

        return $this;
    }

    /**
     * Returns Key for the video asset..
     *
     * @return string|null
     */
    public function getVideoKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoKey');

        return $value;
    }

    /**
     * Sets Key for the video asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoKey(?string $value): self
    {
        $this->setAttribute('videoKey', $value);

        return $this;
    }

    /**
     * Returns Name of the video..
     *
     * @return string|null
     */
    public function getVideoName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoName');

        return $value;
    }

    /**
     * Sets Name of the video..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoName(?string $value): self
    {
        $this->setAttribute('videoName', $value);

        return $this;
    }

    /**
     * Returns Size of the video in bytes..
     *
     * @return int|float|null
     */
    public function getVideoSize(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('videoSize');

        return $value;
    }

    /**
     * Sets Size of the video in bytes..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setVideoSize(int|float|null $value): self
    {
        $this->setAttribute('videoSize', $value);

        return $this;
    }

    /**
     * Returns URL of the video..
     *
     * @return string|null
     */
    public function getVideoUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('videoUrl');

        return $value;
    }

    /**
     * Sets URL of the video..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVideoUrl(?string $value): self
    {
        $this->setAttribute('videoUrl', $value);

        return $this;
    }
}
