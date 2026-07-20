<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad with a creative built with spotlight videos.
 *
 * @generated from Amazon Ads API v1 schema CreateSpotlightVideoSettings.
 */
final class CreateSpotlightVideoSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateSpotlightVideoSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'optimizeText' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'videos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateVideo::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
        ],
    ];

    /**
     * Returns If the advertiser wants text they provided to be optimized by Amazon or not..
     *
     * @return bool|null
     */
    public function getOptimizeText(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('optimizeText');

        return $value;
    }

    /**
     * Sets If the advertiser wants text they provided to be optimized by Amazon or not..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setOptimizeText(?bool $value): self
    {
        $this->setAttribute('optimizeText', $value);

        return $this;
    }

    /**
     * Returns The video asset(s) to use for the Sponsored Product experience..
     *
     * @return list<CreateVideo>|null
     */
    public function getVideos(): ?array
    {
        /** @var list<CreateVideo>|null $value */
        $value = $this->getAttribute('videos');

        return $value;
    }

    /**
     * Sets The video asset(s) to use for the Sponsored Product experience..
     *
     * @param list<CreateVideo>|null $value New property value.
     * @return $this
     */
    public function setVideos(?array $value): self
    {
        $this->setAttribute('videos', $value);

        return $this;
    }
}
