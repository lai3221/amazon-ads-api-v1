<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateResponsiveEcommerceSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateResponsiveEcommerceSettings.
 */
final class UpdateResponsiveEcommerceSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateResponsiveEcommerceSettings';

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
                'class' => CreateCreativeTrackingUrl::class,
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
                'class' => CreateSize::class,
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
        'headlines' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'images' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateImage::class,
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
                'class' => CreateCreativeTrackingUrl::class,
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
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => false,
            'nullable' => false,
        ],
        'logos' => [
            'type' => 'model',
            'class' => UpdateImage::class,
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
                'class' => CreateAdvertisedProducts::class,
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
    ];

    /**
     * Returns The third party urls to trigger when an click is recorded..
     *
     * @return list<CreateCreativeTrackingUrl>|null
     */
    public function getClickTrackingUrls(): ?array
    {
        /** @var list<CreateCreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('clickTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an click is recorded..
     *
     * @param list<CreateCreativeTrackingUrl>|null $value New property value.
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
     * @return list<CreateSize>|null
     */
    public function getCreativeSizes(): ?array
    {
        /** @var list<CreateSize>|null $value */
        $value = $this->getAttribute('creativeSizes');

        return $value;
    }

    /**
     * Sets The placement sizes this creative should serve on..
     *
     * @param list<CreateSize>|null $value New property value.
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
     * @return list<CreateImage>|null
     */
    public function getImages(): ?array
    {
        /** @var list<CreateImage>|null $value */
        $value = $this->getAttribute('images');

        return $value;
    }

    /**
     * Sets The image(s) to use..
     *
     * @param list<CreateImage>|null $value New property value.
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
     * @return UpdateImage|null
     */
    public function getLogos(): ?UpdateImage
    {
        /** @var UpdateImage|null $value */
        $value = $this->getAttribute('logos');

        return $value;
    }

    /**
     * Sets the logos value.
     *
     * @param UpdateImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLogos(UpdateImage|array|null $value): self
    {
        $this->setAttribute('logos', $value);

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
     * @return list<CreateAdvertisedProducts>|null
     */
    public function getProducts(): ?array
    {
        /** @var list<CreateAdvertisedProducts>|null $value */
        $value = $this->getAttribute('products');

        return $value;
    }

    /**
     * Sets The products advertised for the Responsive eCommerce experience..
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
}
