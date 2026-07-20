<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ComponentCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ComponentCreative.
 */
final class ComponentCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ComponentCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetBasedCreativeSettings' => [
            'type' => 'model',
            'class' => AssetBasedCreativeSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'autoCollectionSettings' => [
            'type' => 'model',
            'class' => AutoCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandGallerySettings' => [
            'type' => 'model',
            'class' => BrandGallerySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandStoreSettings' => [
            'type' => 'model',
            'class' => BrandStoreSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'manualCollectionSettings' => [
            'type' => 'model',
            'class' => ManualCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productCollectionSettings' => [
            'type' => 'model',
            'class' => ProductCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productVideoSettings' => [
            'type' => 'model',
            'class' => ProductVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'responsiveEcommerceSettings' => [
            'type' => 'model',
            'class' => ResponsiveEcommerceSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'storeSpotlightSettings' => [
            'type' => 'model',
            'class' => StoreSpotlightSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the assetBasedCreativeSettings value.
     *
     * @return AssetBasedCreativeSettings|null
     */
    public function getAssetBasedCreativeSettings(): ?AssetBasedCreativeSettings
    {
        /** @var AssetBasedCreativeSettings|null $value */
        $value = $this->getAttribute('assetBasedCreativeSettings');

        return $value;
    }

    /**
     * Sets the assetBasedCreativeSettings value.
     *
     * @param AssetBasedCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAssetBasedCreativeSettings(AssetBasedCreativeSettings|array|null $value): self
    {
        $this->setAttribute('assetBasedCreativeSettings', $value);

        return $this;
    }

    /**
     * Returns the autoCollectionSettings value.
     *
     * @return AutoCollectionSettings|null
     */
    public function getAutoCollectionSettings(): ?AutoCollectionSettings
    {
        /** @var AutoCollectionSettings|null $value */
        $value = $this->getAttribute('autoCollectionSettings');

        return $value;
    }

    /**
     * Sets the autoCollectionSettings value.
     *
     * @param AutoCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAutoCollectionSettings(AutoCollectionSettings|array|null $value): self
    {
        $this->setAttribute('autoCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the brandGallerySettings value.
     *
     * @return BrandGallerySettings|null
     */
    public function getBrandGallerySettings(): ?BrandGallerySettings
    {
        /** @var BrandGallerySettings|null $value */
        $value = $this->getAttribute('brandGallerySettings');

        return $value;
    }

    /**
     * Sets the brandGallerySettings value.
     *
     * @param BrandGallerySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandGallerySettings(BrandGallerySettings|array|null $value): self
    {
        $this->setAttribute('brandGallerySettings', $value);

        return $this;
    }

    /**
     * Returns the brandStoreSettings value.
     *
     * @return BrandStoreSettings|null
     */
    public function getBrandStoreSettings(): ?BrandStoreSettings
    {
        /** @var BrandStoreSettings|null $value */
        $value = $this->getAttribute('brandStoreSettings');

        return $value;
    }

    /**
     * Sets the brandStoreSettings value.
     *
     * @param BrandStoreSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreSettings(BrandStoreSettings|array|null $value): self
    {
        $this->setAttribute('brandStoreSettings', $value);

        return $this;
    }

    /**
     * Returns the manualCollectionSettings value.
     *
     * @return ManualCollectionSettings|null
     */
    public function getManualCollectionSettings(): ?ManualCollectionSettings
    {
        /** @var ManualCollectionSettings|null $value */
        $value = $this->getAttribute('manualCollectionSettings');

        return $value;
    }

    /**
     * Sets the manualCollectionSettings value.
     *
     * @param ManualCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setManualCollectionSettings(ManualCollectionSettings|array|null $value): self
    {
        $this->setAttribute('manualCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productCollectionSettings value.
     *
     * @return ProductCollectionSettings|null
     */
    public function getProductCollectionSettings(): ?ProductCollectionSettings
    {
        /** @var ProductCollectionSettings|null $value */
        $value = $this->getAttribute('productCollectionSettings');

        return $value;
    }

    /**
     * Sets the productCollectionSettings value.
     *
     * @param ProductCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCollectionSettings(ProductCollectionSettings|array|null $value): self
    {
        $this->setAttribute('productCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productVideoSettings value.
     *
     * @return ProductVideoSettings|null
     */
    public function getProductVideoSettings(): ?ProductVideoSettings
    {
        /** @var ProductVideoSettings|null $value */
        $value = $this->getAttribute('productVideoSettings');

        return $value;
    }

    /**
     * Sets the productVideoSettings value.
     *
     * @param ProductVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductVideoSettings(ProductVideoSettings|array|null $value): self
    {
        $this->setAttribute('productVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the responsiveEcommerceSettings value.
     *
     * @return ResponsiveEcommerceSettings|null
     */
    public function getResponsiveEcommerceSettings(): ?ResponsiveEcommerceSettings
    {
        /** @var ResponsiveEcommerceSettings|null $value */
        $value = $this->getAttribute('responsiveEcommerceSettings');

        return $value;
    }

    /**
     * Sets the responsiveEcommerceSettings value.
     *
     * @param ResponsiveEcommerceSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setResponsiveEcommerceSettings(ResponsiveEcommerceSettings|array|null $value): self
    {
        $this->setAttribute('responsiveEcommerceSettings', $value);

        return $this;
    }

    /**
     * Returns the storeSpotlightSettings value.
     *
     * @return StoreSpotlightSettings|null
     */
    public function getStoreSpotlightSettings(): ?StoreSpotlightSettings
    {
        /** @var StoreSpotlightSettings|null $value */
        $value = $this->getAttribute('storeSpotlightSettings');

        return $value;
    }

    /**
     * Sets the storeSpotlightSettings value.
     *
     * @param StoreSpotlightSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreSpotlightSettings(StoreSpotlightSettings|array|null $value): self
    {
        $this->setAttribute('storeSpotlightSettings', $value);

        return $this;
    }
}
