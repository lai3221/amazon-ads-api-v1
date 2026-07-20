<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateBrandStoreSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateBrandStoreSettings.
 */
final class UpdateBrandStoreSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateBrandStoreSettings';

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
            'class' => UpdateBrandStoreCallToAction::class,
            'required' => false,
            'nullable' => false,
        ],
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
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
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
            'minItems' => 1,
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
                'class' => CreateImage::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
        ],
        'tallImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateImage::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
        ],
        'wideImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateImage::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
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
     * Returns The body text to use for the Brand Store Creative experience..
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
     * Sets The body text to use for the Brand Store Creative experience..
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
     * @return UpdateBrandStoreCallToAction|null
     */
    public function getCallToActions(): ?UpdateBrandStoreCallToAction
    {
        /** @var UpdateBrandStoreCallToAction|null $value */
        $value = $this->getAttribute('callToActions');

        return $value;
    }

    /**
     * Sets the callToActions value.
     *
     * @param UpdateBrandStoreCallToAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToActions(UpdateBrandStoreCallToAction|array|null $value): self
    {
        $this->setAttribute('callToActions', $value);

        return $this;
    }

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
     * Returns The disclaimers to use for the Brand Store Creative experience..
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
     * Sets The disclaimers to use for the Brand Store Creative experience..
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
     * Returns The headline(s) to use for the Brand Store Creative experience..
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
     * Sets The headline(s) to use for the Brand Store Creative experience..
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
     * @return list<CreateImage>|null
     */
    public function getSquareImages(): ?array
    {
        /** @var list<CreateImage>|null $value */
        $value = $this->getAttribute('squareImages');

        return $value;
    }

    /**
     * Sets The square image(s) to use..
     *
     * @param list<CreateImage>|null $value New property value.
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
     * @return list<CreateImage>|null
     */
    public function getTallImages(): ?array
    {
        /** @var list<CreateImage>|null $value */
        $value = $this->getAttribute('tallImages');

        return $value;
    }

    /**
     * Sets The tall image(s) to use..
     *
     * @param list<CreateImage>|null $value New property value.
     * @return $this
     */
    public function setTallImages(?array $value): self
    {
        $this->setAttribute('tallImages', $value);

        return $this;
    }

    /**
     * Returns The wide image(s) to use..
     *
     * @return list<CreateImage>|null
     */
    public function getWideImages(): ?array
    {
        /** @var list<CreateImage>|null $value */
        $value = $this->getAttribute('wideImages');

        return $value;
    }

    /**
     * Sets The wide image(s) to use..
     *
     * @param list<CreateImage>|null $value New property value.
     * @return $this
     */
    public function setWideImages(?array $value): self
    {
        $this->setAttribute('wideImages', $value);

        return $this;
    }
}
