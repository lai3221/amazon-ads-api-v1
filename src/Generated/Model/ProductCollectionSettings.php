<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad creative that contains multiple products and a custom image.
 *
 * @generated from Amazon Ads API v1 schema ProductCollectionSettings.
 */
final class ProductCollectionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCollectionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brand' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'brandLogos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
        'creativePropertiesToOptimize' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => ProductCollectionCreativePropertiesToOptimize::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'customImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
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
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => ProductCollectionLandingPage::class,
            'required' => true,
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
     * Returns The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @return list<ProductCollectionCreativePropertiesToOptimize>|null
     */
    public function getCreativePropertiesToOptimize(): ?array
    {
        /** @var list<ProductCollectionCreativePropertiesToOptimize>|null $value */
        $value = $this->getAttribute('creativePropertiesToOptimize');

        return $value;
    }

    /**
     * Sets The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @param list<ProductCollectionCreativePropertiesToOptimize>|null $value New property value.
     * @return $this
     */
    public function setCreativePropertiesToOptimize(?array $value): self
    {
        $this->setAttribute('creativePropertiesToOptimize', $value);

        return $this;
    }

    /**
     * Returns The set of custom images featured in the ad..
     *
     * @return list<Image>|null
     */
    public function getCustomImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('customImages');

        return $value;
    }

    /**
     * Sets The set of custom images featured in the ad..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setCustomImages(?array $value): self
    {
        $this->setAttribute('customImages', $value);

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
     * @return ProductCollectionLandingPage|null
     */
    public function getLandingPage(): ?ProductCollectionLandingPage
    {
        /** @var ProductCollectionLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param ProductCollectionLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(ProductCollectionLandingPage|array|null $value): self
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
     * Returns The products featured in the ad..
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
     * Sets The products featured in the ad..
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
     * Returns The headlines entered by the advertiser..
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
     * Sets The headlines entered by the advertiser..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setUntranslatedHeadlines(?array $value): self
    {
        $this->setAttribute('untranslatedHeadlines', $value);

        return $this;
    }
}
