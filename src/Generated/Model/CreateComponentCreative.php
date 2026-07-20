<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateComponentCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateComponentCreative.
 */
final class CreateComponentCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateComponentCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetBasedCreativeSettings' => [
            'type' => 'model',
            'class' => CreateAssetBasedCreativeSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'autoCollectionSettings' => [
            'type' => 'model',
            'class' => CreateAutoCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandGallerySettings' => [
            'type' => 'model',
            'class' => CreateBrandGallerySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandStoreSettings' => [
            'type' => 'model',
            'class' => CreateBrandStoreSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'manualCollectionSettings' => [
            'type' => 'model',
            'class' => CreateManualCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productCollectionSettings' => [
            'type' => 'model',
            'class' => CreateProductCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productVideoSettings' => [
            'type' => 'model',
            'class' => CreateProductVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'responsiveEcommerceSettings' => [
            'type' => 'model',
            'class' => CreateResponsiveEcommerceSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'storeSpotlightSettings' => [
            'type' => 'model',
            'class' => CreateStoreSpotlightSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the assetBasedCreativeSettings value.
     *
     * @return CreateAssetBasedCreativeSettings|null
     */
    public function getAssetBasedCreativeSettings(): ?CreateAssetBasedCreativeSettings
    {
        /** @var CreateAssetBasedCreativeSettings|null $value */
        $value = $this->getAttribute('assetBasedCreativeSettings');

        return $value;
    }

    /**
     * Sets the assetBasedCreativeSettings value.
     *
     * @param CreateAssetBasedCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAssetBasedCreativeSettings(CreateAssetBasedCreativeSettings|array|null $value): self
    {
        $this->setAttribute('assetBasedCreativeSettings', $value);

        return $this;
    }

    /**
     * Returns the autoCollectionSettings value.
     *
     * @return CreateAutoCollectionSettings|null
     */
    public function getAutoCollectionSettings(): ?CreateAutoCollectionSettings
    {
        /** @var CreateAutoCollectionSettings|null $value */
        $value = $this->getAttribute('autoCollectionSettings');

        return $value;
    }

    /**
     * Sets the autoCollectionSettings value.
     *
     * @param CreateAutoCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAutoCollectionSettings(CreateAutoCollectionSettings|array|null $value): self
    {
        $this->setAttribute('autoCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the brandGallerySettings value.
     *
     * @return CreateBrandGallerySettings|null
     */
    public function getBrandGallerySettings(): ?CreateBrandGallerySettings
    {
        /** @var CreateBrandGallerySettings|null $value */
        $value = $this->getAttribute('brandGallerySettings');

        return $value;
    }

    /**
     * Sets the brandGallerySettings value.
     *
     * @param CreateBrandGallerySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandGallerySettings(CreateBrandGallerySettings|array|null $value): self
    {
        $this->setAttribute('brandGallerySettings', $value);

        return $this;
    }

    /**
     * Returns the brandStoreSettings value.
     *
     * @return CreateBrandStoreSettings|null
     */
    public function getBrandStoreSettings(): ?CreateBrandStoreSettings
    {
        /** @var CreateBrandStoreSettings|null $value */
        $value = $this->getAttribute('brandStoreSettings');

        return $value;
    }

    /**
     * Sets the brandStoreSettings value.
     *
     * @param CreateBrandStoreSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreSettings(CreateBrandStoreSettings|array|null $value): self
    {
        $this->setAttribute('brandStoreSettings', $value);

        return $this;
    }

    /**
     * Returns the manualCollectionSettings value.
     *
     * @return CreateManualCollectionSettings|null
     */
    public function getManualCollectionSettings(): ?CreateManualCollectionSettings
    {
        /** @var CreateManualCollectionSettings|null $value */
        $value = $this->getAttribute('manualCollectionSettings');

        return $value;
    }

    /**
     * Sets the manualCollectionSettings value.
     *
     * @param CreateManualCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setManualCollectionSettings(CreateManualCollectionSettings|array|null $value): self
    {
        $this->setAttribute('manualCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productCollectionSettings value.
     *
     * @return CreateProductCollectionSettings|null
     */
    public function getProductCollectionSettings(): ?CreateProductCollectionSettings
    {
        /** @var CreateProductCollectionSettings|null $value */
        $value = $this->getAttribute('productCollectionSettings');

        return $value;
    }

    /**
     * Sets the productCollectionSettings value.
     *
     * @param CreateProductCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCollectionSettings(CreateProductCollectionSettings|array|null $value): self
    {
        $this->setAttribute('productCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productVideoSettings value.
     *
     * @return CreateProductVideoSettings|null
     */
    public function getProductVideoSettings(): ?CreateProductVideoSettings
    {
        /** @var CreateProductVideoSettings|null $value */
        $value = $this->getAttribute('productVideoSettings');

        return $value;
    }

    /**
     * Sets the productVideoSettings value.
     *
     * @param CreateProductVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductVideoSettings(CreateProductVideoSettings|array|null $value): self
    {
        $this->setAttribute('productVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the responsiveEcommerceSettings value.
     *
     * @return CreateResponsiveEcommerceSettings|null
     */
    public function getResponsiveEcommerceSettings(): ?CreateResponsiveEcommerceSettings
    {
        /** @var CreateResponsiveEcommerceSettings|null $value */
        $value = $this->getAttribute('responsiveEcommerceSettings');

        return $value;
    }

    /**
     * Sets the responsiveEcommerceSettings value.
     *
     * @param CreateResponsiveEcommerceSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setResponsiveEcommerceSettings(CreateResponsiveEcommerceSettings|array|null $value): self
    {
        $this->setAttribute('responsiveEcommerceSettings', $value);

        return $this;
    }

    /**
     * Returns the storeSpotlightSettings value.
     *
     * @return CreateStoreSpotlightSettings|null
     */
    public function getStoreSpotlightSettings(): ?CreateStoreSpotlightSettings
    {
        /** @var CreateStoreSpotlightSettings|null $value */
        $value = $this->getAttribute('storeSpotlightSettings');

        return $value;
    }

    /**
     * Sets the storeSpotlightSettings value.
     *
     * @param CreateStoreSpotlightSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreSpotlightSettings(CreateStoreSpotlightSettings|array|null $value): self
    {
        $this->setAttribute('storeSpotlightSettings', $value);

        return $this;
    }
}
