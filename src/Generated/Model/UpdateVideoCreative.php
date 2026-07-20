<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateVideoCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateVideoCreative.
 */
final class UpdateVideoCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateVideoCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'onlineVideoSettings' => [
            'type' => 'model',
            'class' => UpdateOnlineVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'streamingTvSettings' => [
            'type' => 'model',
            'class' => UpdateStreamingTvSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the onlineVideoSettings value.
     *
     * @return UpdateOnlineVideoSettings|null
     */
    public function getOnlineVideoSettings(): ?UpdateOnlineVideoSettings
    {
        /** @var UpdateOnlineVideoSettings|null $value */
        $value = $this->getAttribute('onlineVideoSettings');

        return $value;
    }

    /**
     * Sets the onlineVideoSettings value.
     *
     * @param UpdateOnlineVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOnlineVideoSettings(UpdateOnlineVideoSettings|array|null $value): self
    {
        $this->setAttribute('onlineVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the streamingTvSettings value.
     *
     * @return UpdateStreamingTvSettings|null
     */
    public function getStreamingTvSettings(): ?UpdateStreamingTvSettings
    {
        /** @var UpdateStreamingTvSettings|null $value */
        $value = $this->getAttribute('streamingTvSettings');

        return $value;
    }

    /**
     * Sets the streamingTvSettings value.
     *
     * @param UpdateStreamingTvSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStreamingTvSettings(UpdateStreamingTvSettings|array|null $value): self
    {
        $this->setAttribute('streamingTvSettings', $value);

        return $this;
    }
}
