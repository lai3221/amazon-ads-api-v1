<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Main widget structure for the video reveal feature.
 *
 * @generated from Amazon Ads API v1 schema StoreVideoRevealWidget.
 */
final class StoreVideoRevealWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreVideoRevealWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'backgroundColor' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'csmTag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'fadeoutDuration' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'objectFit' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'skipReveal' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'throttleLimit' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'videos' => [
            'type' => 'model',
            'class' => StoreVideoRevealVideos::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Background color (CSS property)..
     *
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('backgroundColor');

        return $value;
    }

    /**
     * Sets Background color (CSS property)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBackgroundColor(?string $value): self
    {
        $this->setAttribute('backgroundColor', $value);

        return $this;
    }

    /**
     * Returns CSM tracking tag for the video reveal..
     *
     * @return string|null
     */
    public function getCsmTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('csmTag');

        return $value;
    }

    /**
     * Sets CSM tracking tag for the video reveal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCsmTag(?string $value): self
    {
        $this->setAttribute('csmTag', $value);

        return $this;
    }

    /**
     * Returns Fadeout duration (in ms)..
     *
     * @return string|null
     */
    public function getFadeoutDuration(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('fadeoutDuration');

        return $value;
    }

    /**
     * Sets Fadeout duration (in ms)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFadeoutDuration(?string $value): self
    {
        $this->setAttribute('fadeoutDuration', $value);

        return $this;
    }

    /**
     * Returns Object fit (CSS property)..
     *
     * @return string|null
     */
    public function getObjectFit(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('objectFit');

        return $value;
    }

    /**
     * Sets Object fit (CSS property)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setObjectFit(?string $value): self
    {
        $this->setAttribute('objectFit', $value);

        return $this;
    }

    /**
     * Returns Skip reveal (to be used in development only)..
     *
     * @return bool|null
     */
    public function getSkipReveal(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('skipReveal');

        return $value;
    }

    /**
     * Sets Skip reveal (to be used in development only)..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setSkipReveal(?bool $value): self
    {
        $this->setAttribute('skipReveal', $value);

        return $this;
    }

    /**
     * Returns Play video every X minutes..
     *
     * @return string|null
     */
    public function getThrottleLimit(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('throttleLimit');

        return $value;
    }

    /**
     * Sets Play video every X minutes..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setThrottleLimit(?string $value): self
    {
        $this->setAttribute('throttleLimit', $value);

        return $this;
    }

    /**
     * Returns the videos value.
     *
     * @return StoreVideoRevealVideos|null
     */
    public function getVideos(): ?StoreVideoRevealVideos
    {
        /** @var StoreVideoRevealVideos|null $value */
        $value = $this->getAttribute('videos');

        return $value;
    }

    /**
     * Sets the videos value.
     *
     * @param StoreVideoRevealVideos|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setVideos(StoreVideoRevealVideos|array|null $value): self
    {
        $this->setAttribute('videos', $value);

        return $this;
    }
}
