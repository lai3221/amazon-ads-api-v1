<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateStandardAudioExperienceSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateStandardAudioExperienceSettings.
 */
final class UpdateStandardAudioExperienceSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateStandardAudioExperienceSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'audio' => [
            'type' => 'model',
            'class' => UpdateAudio::class,
            'required' => false,
            'nullable' => false,
        ],
        'callToActions' => [
            'type' => 'model',
            'class' => UpdateAudioCallToAction::class,
            'required' => false,
            'nullable' => false,
        ],
        'companionImages' => [
            'type' => 'model',
            'class' => UpdateImage::class,
            'required' => false,
            'nullable' => false,
        ],
        'headlines' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
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
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the audio value.
     *
     * @return UpdateAudio|null
     */
    public function getAudio(): ?UpdateAudio
    {
        /** @var UpdateAudio|null $value */
        $value = $this->getAttribute('audio');

        return $value;
    }

    /**
     * Sets the audio value.
     *
     * @param UpdateAudio|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAudio(UpdateAudio|array|null $value): self
    {
        $this->setAttribute('audio', $value);

        return $this;
    }

    /**
     * Returns the callToActions value.
     *
     * @return UpdateAudioCallToAction|null
     */
    public function getCallToActions(): ?UpdateAudioCallToAction
    {
        /** @var UpdateAudioCallToAction|null $value */
        $value = $this->getAttribute('callToActions');

        return $value;
    }

    /**
     * Sets the callToActions value.
     *
     * @param UpdateAudioCallToAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToActions(UpdateAudioCallToAction|array|null $value): self
    {
        $this->setAttribute('callToActions', $value);

        return $this;
    }

    /**
     * Returns the companionImages value.
     *
     * @return UpdateImage|null
     */
    public function getCompanionImages(): ?UpdateImage
    {
        /** @var UpdateImage|null $value */
        $value = $this->getAttribute('companionImages');

        return $value;
    }

    /**
     * Sets the companionImages value.
     *
     * @param UpdateImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCompanionImages(UpdateImage|array|null $value): self
    {
        $this->setAttribute('companionImages', $value);

        return $this;
    }

    /**
     * Returns The headline(s) to use for the standard audio experience. Headlines must be a maximum of 20 characters..
     *
     * @return string|null
     */
    public function getHeadlines(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headlines');

        return $value;
    }

    /**
     * Sets The headline(s) to use for the standard audio experience. Headlines must be a maximum of 20 characters..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadlines(?string $value): self
    {
        $this->setAttribute('headlines', $value);

        return $this;
    }

    /**
     * Returns The third party urls to trigger when an impression is recorded. Urls cannot exceed 2048 characters..
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
     * Sets The third party urls to trigger when an impression is recorded. Urls cannot exceed 2048 characters..
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
     * Returns The product(s) being advertised..
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
     * Sets The product(s) being advertised..
     *
     * @param list<CreateAdvertisedProducts>|null $value New property value.
     * @return $this
     */
    public function setProducts(?array $value): self
    {
        $this->setAttribute('products', $value);

        return $this;
    }
}
