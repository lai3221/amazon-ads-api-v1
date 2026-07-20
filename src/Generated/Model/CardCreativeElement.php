<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CardCreativeElement schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CardCreativeElement.
 */
final class CardCreativeElement extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CardCreativeElement';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'headline' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => StoreSpotlightLandingPage::class,
            'required' => true,
            'nullable' => false,
        ],
        'products' => [
            'type' => 'model',
            'class' => AdvertisedProducts::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The headline used for the card..
     *
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headline');

        return $value;
    }

    /**
     * Sets The headline used for the card..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadline(?string $value): self
    {
        $this->setAttribute('headline', $value);

        return $this;
    }

    /**
     * Returns the landingPage value.
     *
     * @return StoreSpotlightLandingPage|null
     */
    public function getLandingPage(): ?StoreSpotlightLandingPage
    {
        /** @var StoreSpotlightLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param StoreSpotlightLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(StoreSpotlightLandingPage|array|null $value): self
    {
        $this->setAttribute('landingPage', $value);

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
}
