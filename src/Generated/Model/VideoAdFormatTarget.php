<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the video ad format.
 *
 * @generated from Amazon Ads API v1 schema VideoAdFormatTarget.
 */
final class VideoAdFormatTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoAdFormatTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'videoAdFormat' => [
            'type' => 'enum',
            'class' => VideoAdFormat::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the videoAdFormat value.
     *
     * @return VideoAdFormat|null
     */
    public function getVideoAdFormat(): ?VideoAdFormat
    {
        /** @var VideoAdFormat|null $value */
        $value = $this->getAttribute('videoAdFormat');

        return $value;
    }

    /**
     * Sets the videoAdFormat value.
     *
     * @param VideoAdFormat|string|null $value New property value.
     * @return $this
     */
    public function setVideoAdFormat(VideoAdFormat|string|null $value): self
    {
        $this->setAttribute('videoAdFormat', $value);

        return $this;
    }
}
