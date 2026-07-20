<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the OnlineVideoSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema OnlineVideoSettings.
 */
final class OnlineVideoSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'OnlineVideoSettings';

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
        'clickTrackingUrls' => [
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
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => true,
            'nullable' => false,
        ],
        'products' => [
            'type' => 'model',
            'class' => AdvertisedProducts::class,
            'required' => false,
            'nullable' => false,
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
     * Returns The third party urls to trigger when an click is recorded..
     *
     * @return list<CreativeTrackingUrl>|null
     */
    public function getClickTrackingUrls(): ?array
    {
        /** @var list<CreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('clickTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an click is recorded..
     *
     * @param list<CreativeTrackingUrl>|null $value New property value.
     * @return $this
     */
    public function setClickTrackingUrls(?array $value): self
    {
        $this->setAttribute('clickTrackingUrls', $value);

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
     * Returns the products value.
     *
     * @return AdvertisedProducts|null
     */
    public function getProducts(): ?AdvertisedProducts
    {
        /** @var AdvertisedProducts|null $value */
        $value = $this->getAttribute('products');

        return $value;
    }

    /**
     * Sets the products value.
     *
     * @param AdvertisedProducts|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProducts(AdvertisedProducts|array|null $value): self
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
