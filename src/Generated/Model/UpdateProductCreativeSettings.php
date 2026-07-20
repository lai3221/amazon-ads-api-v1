<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ad with a creative built based on the product being advertised.
 *
 * @generated from Amazon Ads API v1 schema UpdateProductCreativeSettings.
 */
final class UpdateProductCreativeSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateProductCreativeSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertisedProduct' => [
            'type' => 'model',
            'class' => UpdateAdvertisedProducts::class,
            'required' => false,
            'nullable' => false,
        ],
        'spotlightVideos' => [
            'type' => 'model',
            'class' => UpdateSpotlightVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertisedProduct value.
     *
     * @return UpdateAdvertisedProducts|null
     */
    public function getAdvertisedProduct(): ?UpdateAdvertisedProducts
    {
        /** @var UpdateAdvertisedProducts|null $value */
        $value = $this->getAttribute('advertisedProduct');

        return $value;
    }

    /**
     * Sets the advertisedProduct value.
     *
     * @param UpdateAdvertisedProducts|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertisedProduct(UpdateAdvertisedProducts|array|null $value): self
    {
        $this->setAttribute('advertisedProduct', $value);

        return $this;
    }

    /**
     * Returns the spotlightVideos value.
     *
     * @return UpdateSpotlightVideoSettings|null
     */
    public function getSpotlightVideos(): ?UpdateSpotlightVideoSettings
    {
        /** @var UpdateSpotlightVideoSettings|null $value */
        $value = $this->getAttribute('spotlightVideos');

        return $value;
    }

    /**
     * Sets the spotlightVideos value.
     *
     * @param UpdateSpotlightVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSpotlightVideos(UpdateSpotlightVideoSettings|array|null $value): self
    {
        $this->setAttribute('spotlightVideos', $value);

        return $this;
    }
}
