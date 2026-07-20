<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Video Ad Extension.
 *
 * @generated from Amazon Ads API v1 schema VideoExtension.
 */
final class VideoExtension extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoExtension';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'renderedAssetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'renderedCoverImageUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'videoType' => [
            'type' => 'enum',
            'class' => VideoType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The video asset ID rendered in the ad..
     *
     * @return string|null
     */
    public function getRenderedAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('renderedAssetId');

        return $value;
    }

    /**
     * Sets The video asset ID rendered in the ad..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRenderedAssetId(?string $value): self
    {
        $this->setAttribute('renderedAssetId', $value);

        return $this;
    }

    /**
     * Returns The image displayed over the video player before the video is played..
     *
     * @return string|null
     */
    public function getRenderedCoverImageUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('renderedCoverImageUrl');

        return $value;
    }

    /**
     * Sets The image displayed over the video player before the video is played..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRenderedCoverImageUrl(?string $value): self
    {
        $this->setAttribute('renderedCoverImageUrl', $value);

        return $this;
    }

    /**
     * Returns the videoType value.
     *
     * @return VideoType|null
     */
    public function getVideoType(): ?VideoType
    {
        /** @var VideoType|null $value */
        $value = $this->getAttribute('videoType');

        return $value;
    }

    /**
     * Sets the videoType value.
     *
     * @param VideoType|string|null $value New property value.
     * @return $this
     */
    public function setVideoType(VideoType|string|null $value): self
    {
        $this->setAttribute('videoType', $value);

        return $this;
    }
}
