<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad with a creative built based on the product being advertised.
 *
 * @generated from Amazon Ads API v1 schema ProductCreativeSettings.
 */
final class ProductCreativeSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCreativeSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertisedProduct' => [
            'type' => 'model',
            'class' => AdvertisedProducts::class,
            'required' => true,
            'nullable' => false,
        ],
        'headline' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'spotlightVideos' => [
            'type' => 'model',
            'class' => SpotlightVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertisedProduct value.
     *
     * @return AdvertisedProducts|null
     */
    public function getAdvertisedProduct(): ?AdvertisedProducts
    {
        /** @var AdvertisedProducts|null $value */
        $value = $this->getAttribute('advertisedProduct');

        return $value;
    }

    /**
     * Sets the advertisedProduct value.
     *
     * @param AdvertisedProducts|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertisedProduct(AdvertisedProducts|array|null $value): self
    {
        $this->setAttribute('advertisedProduct', $value);

        return $this;
    }

    /**
     * Returns The headline/custom text associated with the ad creative..
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
     * Sets The headline/custom text associated with the ad creative..
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
     * Returns the spotlightVideos value.
     *
     * @return SpotlightVideoSettings|null
     */
    public function getSpotlightVideos(): ?SpotlightVideoSettings
    {
        /** @var SpotlightVideoSettings|null $value */
        $value = $this->getAttribute('spotlightVideos');

        return $value;
    }

    /**
     * Sets the spotlightVideos value.
     *
     * @param SpotlightVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSpotlightVideos(SpotlightVideoSettings|array|null $value): self
    {
        $this->setAttribute('spotlightVideos', $value);

        return $this;
    }
}
