<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStreamingTvSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStreamingTvSettings.
 */
final class CreateStreamingTvSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStreamingTvSettings';

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
                'class' => CreateVideoCallToAction::class,
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
                'class' => CreateCreativeTrackingUrl::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => CreateVideoLandingPage::class,
            'required' => false,
            'nullable' => false,
        ],
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => false,
            'nullable' => false,
        ],
        'products' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateAdvertisedProducts::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'videos' => [
            'type' => 'model',
            'class' => CreateVideo::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The call to actions for this video..
     *
     * @return list<CreateVideoCallToAction>|null
     */
    public function getCallToActions(): ?array
    {
        /** @var list<CreateVideoCallToAction>|null $value */
        $value = $this->getAttribute('callToActions');

        return $value;
    }

    /**
     * Sets The call to actions for this video..
     *
     * @param list<CreateVideoCallToAction>|null $value New property value.
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
     * @return list<CreateCreativeTrackingUrl>|null
     */
    public function getImpressionTrackingUrls(): ?array
    {
        /** @var list<CreateCreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('impressionTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an impression is recorded..
     *
     * @param list<CreateCreativeTrackingUrl>|null $value New property value.
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
     * @return CreateVideoLandingPage|null
     */
    public function getLandingPage(): ?CreateVideoLandingPage
    {
        /** @var CreateVideoLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param CreateVideoLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(CreateVideoLandingPage|array|null $value): self
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
     * Returns The product advertised on this video creative..
     *
     * @return list<CreateAdvertisedProducts>|null
     */
    public function getProducts(): ?array
    {
        /** @var list<CreateAdvertisedProducts>|null $value */
        $value = $this->getAttribute('products');

        return $value;
    }

    /**
     * Sets The product advertised on this video creative..
     *
     * @param list<CreateAdvertisedProducts>|null $value New property value.
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
     * @return CreateVideo|null
     */
    public function getVideos(): ?CreateVideo
    {
        /** @var CreateVideo|null $value */
        $value = $this->getAttribute('videos');

        return $value;
    }

    /**
     * Sets the videos value.
     *
     * @param CreateVideo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setVideos(CreateVideo|array|null $value): self
    {
        $this->setAttribute('videos', $value);

        return $this;
    }
}
