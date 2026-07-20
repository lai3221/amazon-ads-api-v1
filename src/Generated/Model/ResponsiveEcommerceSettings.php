<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ResponsiveEcommerceSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ResponsiveEcommerceSettings.
 */
final class ResponsiveEcommerceSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ResponsiveEcommerceSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
        'creativePropertiesToOptimize' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => ResponsiveEcommerceCreativePropertiesToOptimize::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 3,
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
        'headlines' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
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
            'class' => ResponsiveEcommerceLandingPage::class,
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
            'type' => 'model',
            'class' => Image::class,
            'required' => false,
            'nullable' => false,
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
        'recAdVariations' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => ResponsiveEcommerceAdVariations::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'responsiveSizingBehavior' => [
            'type' => 'enum',
            'class' => ResponsiveSizingBehavior::class,
            'required' => false,
            'nullable' => false,
        ],
        'supportedThirdPartySellers' => [
            'type' => 'enum',
            'class' => SupportedThirdPartySellers::class,
            'required' => false,
            'nullable' => false,
        ],
        'untranslatedHeadlines' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

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
     * Returns The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @return list<ResponsiveEcommerceCreativePropertiesToOptimize>|null
     */
    public function getCreativePropertiesToOptimize(): ?array
    {
        /** @var list<ResponsiveEcommerceCreativePropertiesToOptimize>|null $value */
        $value = $this->getAttribute('creativePropertiesToOptimize');

        return $value;
    }

    /**
     * Sets The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @param list<ResponsiveEcommerceCreativePropertiesToOptimize>|null $value New property value.
     * @return $this
     */
    public function setCreativePropertiesToOptimize(?array $value): self
    {
        $this->setAttribute('creativePropertiesToOptimize', $value);

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
     * Returns The disclaimer to use for the Responsive eCommerce experience..
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
     * Sets The disclaimer to use for the Responsive eCommerce experience..
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
     * Returns The headline to use for the Responsive eCommerce experience..
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
     * Sets The headline to use for the Responsive eCommerce experience..
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
     * @return ResponsiveEcommerceLandingPage|null
     */
    public function getLandingPage(): ?ResponsiveEcommerceLandingPage
    {
        /** @var ResponsiveEcommerceLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param ResponsiveEcommerceLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(ResponsiveEcommerceLandingPage|array|null $value): self
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
     * Returns the logos value.
     *
     * @return Image|null
     */
    public function getLogos(): ?Image
    {
        /** @var Image|null $value */
        $value = $this->getAttribute('logos');

        return $value;
    }

    /**
     * Sets the logos value.
     *
     * @param Image|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLogos(Image|array|null $value): self
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
     * Returns The products advertised for the Responsive eCommerce experience..
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
     * Sets The products advertised for the Responsive eCommerce experience..
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
     * Returns The rendering variations selected for the Responsive eCommerce experience..
     *
     * @return list<ResponsiveEcommerceAdVariations>|null
     */
    public function getRecAdVariations(): ?array
    {
        /** @var list<ResponsiveEcommerceAdVariations>|null $value */
        $value = $this->getAttribute('recAdVariations');

        return $value;
    }

    /**
     * Sets The rendering variations selected for the Responsive eCommerce experience..
     *
     * @param list<ResponsiveEcommerceAdVariations>|null $value New property value.
     * @return $this
     */
    public function setRecAdVariations(?array $value): self
    {
        $this->setAttribute('recAdVariations', $value);

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
     * Returns the supportedThirdPartySellers value.
     *
     * @return SupportedThirdPartySellers|null
     */
    public function getSupportedThirdPartySellers(): ?SupportedThirdPartySellers
    {
        /** @var SupportedThirdPartySellers|null $value */
        $value = $this->getAttribute('supportedThirdPartySellers');

        return $value;
    }

    /**
     * Sets the supportedThirdPartySellers value.
     *
     * @param SupportedThirdPartySellers|string|null $value New property value.
     * @return $this
     */
    public function setSupportedThirdPartySellers(SupportedThirdPartySellers|string|null $value): self
    {
        $this->setAttribute('supportedThirdPartySellers', $value);

        return $this;
    }

    /**
     * Returns The headline entered by the advertiser..
     *
     * @return string|null
     */
    public function getUntranslatedHeadlines(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('untranslatedHeadlines');

        return $value;
    }

    /**
     * Sets The headline entered by the advertiser..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUntranslatedHeadlines(?string $value): self
    {
        $this->setAttribute('untranslatedHeadlines', $value);

        return $this;
    }
}
