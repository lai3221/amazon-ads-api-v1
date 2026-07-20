<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AssetBasedCreativeSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AssetBasedCreativeSettings.
 */
final class AssetBasedCreativeSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AssetBasedCreativeSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'additionalHtml' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'backgrounds' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Background::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'bodyText' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'brand' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'callToActions' => [
            'type' => 'model',
            'class' => AssetBasedCreativeCallToAction::class,
            'required' => false,
            'nullable' => false,
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
        'creativeSizes' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Size::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'customVideos' => [
            'type' => 'model',
            'class' => Video::class,
            'required' => false,
            'nullable' => false,
        ],
        'disclaimers' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'enableCreativeAutoTranslation' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'hasTermsAndConditions' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'headlines' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
        ],
        'images' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 3,
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
        'inventoryTypes' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => ComponentInventoryType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => ComponentLandingPage::class,
            'required' => false,
            'nullable' => false,
        ],
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => false,
            'nullable' => false,
        ],
        'logos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'moderationStatus' => [
            'type' => 'model',
            'class' => CreativeStatus::class,
            'required' => false,
            'nullable' => false,
        ],
        'optimizationGoalKpi' => [
            'type' => 'enum',
            'class' => CreativeOptimizationGoalKpi::class,
            'required' => false,
            'nullable' => false,
        ],
        'responsiveSizingBehavior' => [
            'type' => 'enum',
            'class' => ResponsiveSizingBehavior::class,
            'required' => false,
            'nullable' => false,
        ],
        'squareImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'tallImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
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
        'wideImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
    ];

    /**
     * Returns Additional HTML to include with the render response for display inventory targets..
     *
     * @return string|null
     */
    public function getAdditionalHtml(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('additionalHtml');

        return $value;
    }

    /**
     * Sets Additional HTML to include with the render response for display inventory targets..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdditionalHtml(?string $value): self
    {
        $this->setAttribute('additionalHtml', $value);

        return $this;
    }

    /**
     * Returns The background which is displayed on the ad..
     *
     * @return list<Background>|null
     */
    public function getBackgrounds(): ?array
    {
        /** @var list<Background>|null $value */
        $value = $this->getAttribute('backgrounds');

        return $value;
    }

    /**
     * Sets The background which is displayed on the ad..
     *
     * @param list<Background>|null $value New property value.
     * @return $this
     */
    public function setBackgrounds(?array $value): self
    {
        $this->setAttribute('backgrounds', $value);

        return $this;
    }

    /**
     * Returns The body text to use for the Asset Based Creative experience..
     *
     * @return list<string>|null
     */
    public function getBodyText(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('bodyText');

        return $value;
    }

    /**
     * Sets The body text to use for the Asset Based Creative experience..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setBodyText(?array $value): self
    {
        $this->setAttribute('bodyText', $value);

        return $this;
    }

    /**
     * Returns The brand of the product(s) being advertised..
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
     * Sets The brand of the product(s) being advertised..
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
     * Returns the callToActions value.
     *
     * @return AssetBasedCreativeCallToAction|null
     */
    public function getCallToActions(): ?AssetBasedCreativeCallToAction
    {
        /** @var AssetBasedCreativeCallToAction|null $value */
        $value = $this->getAttribute('callToActions');

        return $value;
    }

    /**
     * Sets the callToActions value.
     *
     * @param AssetBasedCreativeCallToAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToActions(AssetBasedCreativeCallToAction|array|null $value): self
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
     * Returns The placement sizes this creative should serve on..
     *
     * @return list<Size>|null
     */
    public function getCreativeSizes(): ?array
    {
        /** @var list<Size>|null $value */
        $value = $this->getAttribute('creativeSizes');

        return $value;
    }

    /**
     * Sets The placement sizes this creative should serve on..
     *
     * @param list<Size>|null $value New property value.
     * @return $this
     */
    public function setCreativeSizes(?array $value): self
    {
        $this->setAttribute('creativeSizes', $value);

        return $this;
    }

    /**
     * Returns the customVideos value.
     *
     * @return Video|null
     */
    public function getCustomVideos(): ?Video
    {
        /** @var Video|null $value */
        $value = $this->getAttribute('customVideos');

        return $value;
    }

    /**
     * Sets the customVideos value.
     *
     * @param Video|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCustomVideos(Video|array|null $value): self
    {
        $this->setAttribute('customVideos', $value);

        return $this;
    }

    /**
     * Returns The disclaimers to use for the Asset Based Creative experience..
     *
     * @return string|null
     */
    public function getDisclaimers(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('disclaimers');

        return $value;
    }

    /**
     * Sets The disclaimers to use for the Asset Based Creative experience..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDisclaimers(?string $value): self
    {
        $this->setAttribute('disclaimers', $value);

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
     * Returns Indicates that the ad promotes a free product or service and has qualifying terms and conditions applicable to the customer. LandingPageURL must link out to a page detailing terms and conditions or contain a link to those..
     *
     * @return bool|null
     */
    public function getHasTermsAndConditions(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('hasTermsAndConditions');

        return $value;
    }

    /**
     * Sets Indicates that the ad promotes a free product or service and has qualifying terms and conditions applicable to the customer. LandingPageURL must link out to a page detailing terms and conditions or contain a link to those..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setHasTermsAndConditions(?bool $value): self
    {
        $this->setAttribute('hasTermsAndConditions', $value);

        return $this;
    }

    /**
     * Returns The headline(s) to use for the Asset Based Creative experience..
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
     * Sets The headline(s) to use for the Asset Based Creative experience..
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
     * Returns The image(s) to use..
     *
     * @return list<Image>|null
     */
    public function getImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('images');

        return $value;
    }

    /**
     * Sets The image(s) to use..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setImages(?array $value): self
    {
        $this->setAttribute('images', $value);

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
     * Returns The inventory types this creative should serve on..
     *
     * @return list<ComponentInventoryType>|null
     */
    public function getInventoryTypes(): ?array
    {
        /** @var list<ComponentInventoryType>|null $value */
        $value = $this->getAttribute('inventoryTypes');

        return $value;
    }

    /**
     * Sets The inventory types this creative should serve on..
     *
     * @param list<ComponentInventoryType>|null $value New property value.
     * @return $this
     */
    public function setInventoryTypes(?array $value): self
    {
        $this->setAttribute('inventoryTypes', $value);

        return $this;
    }

    /**
     * Returns the landingPage value.
     *
     * @return ComponentLandingPage|null
     */
    public function getLandingPage(): ?ComponentLandingPage
    {
        /** @var ComponentLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param ComponentLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(ComponentLandingPage|array|null $value): self
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
     * Returns The logos to use for the Asset Based Creative experience..
     *
     * @return list<Image>|null
     */
    public function getLogos(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('logos');

        return $value;
    }

    /**
     * Sets The logos to use for the Asset Based Creative experience..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setLogos(?array $value): self
    {
        $this->setAttribute('logos', $value);

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
     * Returns the optimizationGoalKpi value.
     *
     * @return CreativeOptimizationGoalKpi|null
     */
    public function getOptimizationGoalKpi(): ?CreativeOptimizationGoalKpi
    {
        /** @var CreativeOptimizationGoalKpi|null $value */
        $value = $this->getAttribute('optimizationGoalKpi');

        return $value;
    }

    /**
     * Sets the optimizationGoalKpi value.
     *
     * @param CreativeOptimizationGoalKpi|string|null $value New property value.
     * @return $this
     */
    public function setOptimizationGoalKpi(CreativeOptimizationGoalKpi|string|null $value): self
    {
        $this->setAttribute('optimizationGoalKpi', $value);

        return $this;
    }

    /**
     * Returns the responsiveSizingBehavior value.
     *
     * @return ResponsiveSizingBehavior|null
     */
    public function getResponsiveSizingBehavior(): ?ResponsiveSizingBehavior
    {
        /** @var ResponsiveSizingBehavior|null $value */
        $value = $this->getAttribute('responsiveSizingBehavior');

        return $value;
    }

    /**
     * Sets the responsiveSizingBehavior value.
     *
     * @param ResponsiveSizingBehavior|string|null $value New property value.
     * @return $this
     */
    public function setResponsiveSizingBehavior(ResponsiveSizingBehavior|string|null $value): self
    {
        $this->setAttribute('responsiveSizingBehavior', $value);

        return $this;
    }

    /**
     * Returns The square image(s) to use..
     *
     * @return list<Image>|null
     */
    public function getSquareImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('squareImages');

        return $value;
    }

    /**
     * Sets The square image(s) to use..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setSquareImages(?array $value): self
    {
        $this->setAttribute('squareImages', $value);

        return $this;
    }

    /**
     * Returns The tall image(s) to use..
     *
     * @return list<Image>|null
     */
    public function getTallImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('tallImages');

        return $value;
    }

    /**
     * Sets The tall image(s) to use..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setTallImages(?array $value): self
    {
        $this->setAttribute('tallImages', $value);

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
     * Returns The wide image(s) to use..
     *
     * @return list<Image>|null
     */
    public function getWideImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('wideImages');

        return $value;
    }

    /**
     * Sets The wide image(s) to use..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setWideImages(?array $value): self
    {
        $this->setAttribute('wideImages', $value);

        return $this;
    }
}
