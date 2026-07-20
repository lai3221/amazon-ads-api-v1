<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the VideoCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema VideoCreative.
 */
final class VideoCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'VideoCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'onlineVideoSettings' => [
            'type' => 'model',
            'class' => OnlineVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'streamingTvSettings' => [
            'type' => 'model',
            'class' => StreamingTvSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the onlineVideoSettings value.
     *
     * @return OnlineVideoSettings|null
     */
    public function getOnlineVideoSettings(): ?OnlineVideoSettings
    {
        /** @var OnlineVideoSettings|null $value */
        $value = $this->getAttribute('onlineVideoSettings');

        return $value;
    }

    /**
     * Sets the onlineVideoSettings value.
     *
     * @param OnlineVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOnlineVideoSettings(OnlineVideoSettings|array|null $value): self
    {
        $this->setAttribute('onlineVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the streamingTvSettings value.
     *
     * @return StreamingTvSettings|null
     */
    public function getStreamingTvSettings(): ?StreamingTvSettings
    {
        /** @var StreamingTvSettings|null $value */
        $value = $this->getAttribute('streamingTvSettings');

        return $value;
    }

    /**
     * Sets the streamingTvSettings value.
     *
     * @param StreamingTvSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStreamingTvSettings(StreamingTvSettings|array|null $value): self
    {
        $this->setAttribute('streamingTvSettings', $value);

        return $this;
    }
}
