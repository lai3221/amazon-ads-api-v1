<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StreamingTvSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StreamingTvSettings.
 */
final class StreamingTvSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StreamingTvSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'callToActions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => VideoCallToAction::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
        'impressionTrackingUrls' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreativeTrackingUrl::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => VideoLandingPage::class,
            'required' => false,
            'nullable' => false,
        ],
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => false,
            'nullable' => false,
        ],
        'moderationStatus' => [
            'type' => 'model',
            'class' => CreativeStatus::class,
            'required' => false,
            'nullable' => false,
        ],
        'products' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertisedProducts::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'videos' => [
            'type' => 'model',
            'class' => Video::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The call to actions for this video..
     *
     * @return list<VideoCallToAction>|null
     */
    public function getCallToActions(): ?array
    {
        /** @var list<VideoCallToAction>|null $value */
        $value = $this->getAttribute('callToActions');

        return $value;
    }

    /**
     * Sets The call to actions for this video..
     *
     * @param list<VideoCallToAction>|null $value New property value.
     * @return $this
     */
    public function setCallToActions(?array $value): self
    {
        $this->setAttribute('callToActions', $value);

        return $this;
    }

    /**
     * Returns The third party urls to trigger when an impression is recorded..
     *
     * @return list<CreativeTrackingUrl>|null
     */
    public function getImpressionTrackingUrls(): ?array
    {
        /** @var list<CreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('impressionTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an impression is recorded..
     *
     * @param list<CreativeTrackingUrl>|null $value New property value.
     * @return $this
     */
    public function setImpressionTrackingUrls(?array $value): self
    {
        $this->setAttribute('impressionTrackingUrls', $value);

        return $this;
    }

    /**
     * Returns the landingPage value.
     *
     * @return VideoLandingPage|null
     */
    public function getLandingPage(): ?VideoLandingPage
    {
        /** @var VideoLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param VideoLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(VideoLandingPage|array|null $value): self
    {
        $this->setAttribute('landingPage', $value);

        return $this;
    }

    /**
     * Returns the language value.
     *
     * @return LanguageLocale|null
     */
    public function getLanguage(): ?LanguageLocale
    {
        /** @var LanguageLocale|null $value */
        $value = $this->getAttribute('language');

        return $value;
    }

    /**
     * Sets the language value.
     *
     * @param LanguageLocale|string|null $value New property value.
     * @return $this
     */
    public function setLanguage(LanguageLocale|string|null $value): self
    {
        $this->setAttribute('language', $value);

        return $this;
    }

    /**
     * Returns the moderationStatus value.
     *
     * @return CreativeStatus|null
     */
    public function getModerationStatus(): ?CreativeStatus
    {
        /** @var CreativeStatus|null $value */
        $value = $this->getAttribute('moderationStatus');

        return $value;
    }

    /**
     * Sets the moderationStatus value.
     *
     * @param CreativeStatus|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setModerationStatus(CreativeStatus|array|null $value): self
    {
        $this->setAttribute('moderationStatus', $value);

        return $this;
    }

    /**
     * Returns The product advertised on this video creative..
     *
     * @return list<AdvertisedProducts>|null
     */
    public function getProducts(): ?array
    {
        /** @var list<AdvertisedProducts>|null $value */
        $value = $this->getAttribute('products');

        return $value;
    }

    /**
     * Sets The product advertised on this video creative..
     *
     * @param list<AdvertisedProducts>|null $value New property value.
     * @return $this
     */
    public function setProducts(?array $value): self
    {
        $this->setAttribute('products', $value);

        return $this;
    }

    /**
     * Returns the videos value.
     *
     * @return Video|null
     */
    public function getVideos(): ?Video
    {
        /** @var Video|null $value */
        $value = $this->getAttribute('videos');

        return $value;
    }

    /**
     * Sets the videos value.
     *
     * @param Video|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setVideos(Video|array|null $value): self
    {
        $this->setAttribute('videos', $value);

        return $this;
    }
}
