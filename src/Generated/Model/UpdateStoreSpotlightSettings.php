<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad creative that contains ASINs within a brand Store.
 *
 * @generated from Amazon Ads API v1 schema UpdateStoreSpotlightSettings.
 */
final class UpdateStoreSpotlightSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateStoreSpotlightSettings';

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
                'class' => CreateImage::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'cards' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateCardCreativeElement::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 3,
            'maxItems' => 3,
        ],
        'creativePropertiesToOptimize' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => StoreSpotlightCreativePropertiesToOptimize::class,
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
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => UpdateStoreSpotlightLandingPage::class,
            'required' => false,
            'nullable' => false,
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
     * @return list<CreateImage>|null
     */
    public function getBrandLogos(): ?array
    {
        /** @var list<CreateImage>|null $value */
        $value = $this->getAttribute('brandLogos');

        return $value;
    }

    /**
     * Sets The brand logo image assets to be used in the ad..
     *
     * @param list<CreateImage>|null $value New property value.
     * @return $this
     */
    public function setBrandLogos(?array $value): self
    {
        $this->setAttribute('brandLogos', $value);

        return $this;
    }

    /**
     * Returns The sub-elements of the creative. Each card highlights a different ASIN associated to a brand Store..
     *
     * @return list<CreateCardCreativeElement>|null
     */
    public function getCards(): ?array
    {
        /** @var list<CreateCardCreativeElement>|null $value */
        $value = $this->getAttribute('cards');

        return $value;
    }

    /**
     * Sets The sub-elements of the creative. Each card highlights a different ASIN associated to a brand Store..
     *
     * @param list<CreateCardCreativeElement>|null $value New property value.
     * @return $this
     */
    public function setCards(?array $value): self
    {
        $this->setAttribute('cards', $value);

        return $this;
    }

    /**
     * Returns The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @return list<StoreSpotlightCreativePropertiesToOptimize>|null
     */
    public function getCreativePropertiesToOptimize(): ?array
    {
        /** @var list<StoreSpotlightCreativePropertiesToOptimize>|null $value */
        $value = $this->getAttribute('creativePropertiesToOptimize');

        return $value;
    }

    /**
     * Sets The CreativeProperty Amazon will enhance or generate based on various factors like audience, placement etc..
     *
     * @param list<StoreSpotlightCreativePropertiesToOptimize>|null $value New property value.
     * @return $this
     */
    public function setCreativePropertiesToOptimize(?array $value): self
    {
        $this->setAttribute('creativePropertiesToOptimize', $value);

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
     * @return UpdateStoreSpotlightLandingPage|null
     */
    public function getLandingPage(): ?UpdateStoreSpotlightLandingPage
    {
        /** @var UpdateStoreSpotlightLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param UpdateStoreSpotlightLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(UpdateStoreSpotlightLandingPage|array|null $value): self
    {
        $this->setAttribute('landingPage', $value);

        return $this;
    }
}
