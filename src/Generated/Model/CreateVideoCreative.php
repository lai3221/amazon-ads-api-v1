<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateVideoCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateVideoCreative.
 */
final class CreateVideoCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateVideoCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'onlineVideoSettings' => [
            'type' => 'model',
            'class' => CreateOnlineVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'streamingTvSettings' => [
            'type' => 'model',
            'class' => CreateStreamingTvSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the onlineVideoSettings value.
     *
     * @return CreateOnlineVideoSettings|null
     */
    public function getOnlineVideoSettings(): ?CreateOnlineVideoSettings
    {
        /** @var CreateOnlineVideoSettings|null $value */
        $value = $this->getAttribute('onlineVideoSettings');

        return $value;
    }

    /**
     * Sets the onlineVideoSettings value.
     *
     * @param CreateOnlineVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOnlineVideoSettings(CreateOnlineVideoSettings|array|null $value): self
    {
        $this->setAttribute('onlineVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the streamingTvSettings value.
     *
     * @return CreateStreamingTvSettings|null
     */
    public function getStreamingTvSettings(): ?CreateStreamingTvSettings
    {
        /** @var CreateStreamingTvSettings|null $value */
        $value = $this->getAttribute('streamingTvSettings');

        return $value;
    }

    /**
     * Sets the streamingTvSettings value.
     *
     * @param CreateStreamingTvSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStreamingTvSettings(CreateStreamingTvSettings|array|null $value): self
    {
        $this->setAttribute('streamingTvSettings', $value);

        return $this;
    }
}
