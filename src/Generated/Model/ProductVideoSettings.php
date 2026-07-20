<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad with a creative that includes a video.
 *
 * @generated from Amazon Ads API v1 schema ProductVideoSettings.
 */
final class ProductVideoSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductVideoSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brand' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'brandLogos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'enableCreativeAutoTranslation' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'headlines' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => VideoLandingPage::class,
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
            'maxItems' => 3,
        ],
        'untranslatedHeadlines' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'untranslatedVideos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Video::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
        'videos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Video::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns The name of the brand being advertised..
     *
     * @return string|null
     */
    public function getBrand(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('brand');

        return $value;
    }

    /**
     * Sets The name of the brand being advertised..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBrand(?string $value): self
    {
        $this->setAttribute('brand', $value);

        return $this;
    }

    /**
     * Returns The brand logo image assets to be used in the ad..
     *
     * @return list<Image>|null
     */
    public function getBrandLogos(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('brandLogos');

        return $value;
    }

    /**
     * Sets The brand logo image assets to be used in the ad..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setBrandLogos(?array $value): self
    {
        $this->setAttribute('brandLogos', $value);

        return $this;
    }

    /**
     * Returns If set to true and the headline and/or video are not in the marketplace's default language, Amazon will attempt to translate them to the marketplace's default language. If Amazon is unable to translate them, the ad will be rejected by moderation..
     *
     * @return bool|null
     */
    public function getEnableCreativeAutoTranslation(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('enableCreativeAutoTranslation');

        return $value;
    }

    /**
     * Sets If set to true and the headline and/or video are not in the marketplace's default language, Amazon will attempt to translate them to the marketplace's default language. If Amazon is unable to translate them, the ad will be rejected by moderation..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setEnableCreativeAutoTranslation(?bool $value): self
    {
        $this->setAttribute('enableCreativeAutoTranslation', $value);

        return $this;
    }

    /**
     * Returns The headline submitted as part of the ad creative. During your campaign, Amazon will optimize amongst the headlines you provide to match customer intent..
     *
     * @return list<string>|null
     */
    public function getHeadlines(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('headlines');

        return $value;
    }

    /**
     * Sets The headline submitted as part of the ad creative. During your campaign, Amazon will optimize amongst the headlines you provide to match customer intent..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setHeadlines(?array $value): self
    {
        $this->setAttribute('headlines', $value);

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
     * Returns The products featured in the video ad..
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
     * Sets The products featured in the video ad..
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
     * Returns The headline entered by the advertiser..
     *
     * @return list<string>|null
     */
    public function getUntranslatedHeadlines(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('untranslatedHeadlines');

        return $value;
    }

    /**
     * Sets The headline entered by the advertiser..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setUntranslatedHeadlines(?array $value): self
    {
        $this->setAttribute('untranslatedHeadlines', $value);

        return $this;
    }

    /**
     * Returns The original video assets submitted as part of the creative..
     *
     * @return list<Video>|null
     */
    public function getUntranslatedVideos(): ?array
    {
        /** @var list<Video>|null $value */
        $value = $this->getAttribute('untranslatedVideos');

        return $value;
    }

    /**
     * Sets The original video assets submitted as part of the creative..
     *
     * @param list<Video>|null $value New property value.
     * @return $this
     */
    public function setUntranslatedVideos(?array $value): self
    {
        $this->setAttribute('untranslatedVideos', $value);

        return $this;
    }

    /**
     * Returns The video assets used in the ad..
     *
     * @return list<Video>|null
     */
    public function getVideos(): ?array
    {
        /** @var list<Video>|null $value */
        $value = $this->getAttribute('videos');

        return $value;
    }

    /**
     * Sets The video assets used in the ad..
     *
     * @param list<Video>|null $value New property value.
     * @return $this
     */
    public function setVideos(?array $value): self
    {
        $this->setAttribute('videos', $value);

        return $this;
    }
}
