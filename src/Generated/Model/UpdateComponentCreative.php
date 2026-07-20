<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateComponentCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateComponentCreative.
 */
final class UpdateComponentCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateComponentCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetBasedCreativeSettings' => [
            'type' => 'model',
            'class' => UpdateAssetBasedCreativeSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'autoCollectionSettings' => [
            'type' => 'model',
            'class' => UpdateAutoCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandGallerySettings' => [
            'type' => 'model',
            'class' => UpdateBrandGallerySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandStoreSettings' => [
            'type' => 'model',
            'class' => UpdateBrandStoreSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'manualCollectionSettings' => [
            'type' => 'model',
            'class' => UpdateManualCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productCollectionSettings' => [
            'type' => 'model',
            'class' => UpdateProductCollectionSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'productVideoSettings' => [
            'type' => 'model',
            'class' => UpdateProductVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'responsiveEcommerceSettings' => [
            'type' => 'model',
            'class' => UpdateResponsiveEcommerceSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'storeSpotlightSettings' => [
            'type' => 'model',
            'class' => UpdateStoreSpotlightSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the assetBasedCreativeSettings value.
     *
     * @return UpdateAssetBasedCreativeSettings|null
     */
    public function getAssetBasedCreativeSettings(): ?UpdateAssetBasedCreativeSettings
    {
        /** @var UpdateAssetBasedCreativeSettings|null $value */
        $value = $this->getAttribute('assetBasedCreativeSettings');

        return $value;
    }

    /**
     * Sets the assetBasedCreativeSettings value.
     *
     * @param UpdateAssetBasedCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAssetBasedCreativeSettings(UpdateAssetBasedCreativeSettings|array|null $value): self
    {
        $this->setAttribute('assetBasedCreativeSettings', $value);

        return $this;
    }

    /**
     * Returns the autoCollectionSettings value.
     *
     * @return UpdateAutoCollectionSettings|null
     */
    public function getAutoCollectionSettings(): ?UpdateAutoCollectionSettings
    {
        /** @var UpdateAutoCollectionSettings|null $value */
        $value = $this->getAttribute('autoCollectionSettings');

        return $value;
    }

    /**
     * Sets the autoCollectionSettings value.
     *
     * @param UpdateAutoCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAutoCollectionSettings(UpdateAutoCollectionSettings|array|null $value): self
    {
        $this->setAttribute('autoCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the brandGallerySettings value.
     *
     * @return UpdateBrandGallerySettings|null
     */
    public function getBrandGallerySettings(): ?UpdateBrandGallerySettings
    {
        /** @var UpdateBrandGallerySettings|null $value */
        $value = $this->getAttribute('brandGallerySettings');

        return $value;
    }

    /**
     * Sets the brandGallerySettings value.
     *
     * @param UpdateBrandGallerySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandGallerySettings(UpdateBrandGallerySettings|array|null $value): self
    {
        $this->setAttribute('brandGallerySettings', $value);

        return $this;
    }

    /**
     * Returns the brandStoreSettings value.
     *
     * @return UpdateBrandStoreSettings|null
     */
    public function getBrandStoreSettings(): ?UpdateBrandStoreSettings
    {
        /** @var UpdateBrandStoreSettings|null $value */
        $value = $this->getAttribute('brandStoreSettings');

        return $value;
    }

    /**
     * Sets the brandStoreSettings value.
     *
     * @param UpdateBrandStoreSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreSettings(UpdateBrandStoreSettings|array|null $value): self
    {
        $this->setAttribute('brandStoreSettings', $value);

        return $this;
    }

    /**
     * Returns the manualCollectionSettings value.
     *
     * @return UpdateManualCollectionSettings|null
     */
    public function getManualCollectionSettings(): ?UpdateManualCollectionSettings
    {
        /** @var UpdateManualCollectionSettings|null $value */
        $value = $this->getAttribute('manualCollectionSettings');

        return $value;
    }

    /**
     * Sets the manualCollectionSettings value.
     *
     * @param UpdateManualCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setManualCollectionSettings(UpdateManualCollectionSettings|array|null $value): self
    {
        $this->setAttribute('manualCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productCollectionSettings value.
     *
     * @return UpdateProductCollectionSettings|null
     */
    public function getProductCollectionSettings(): ?UpdateProductCollectionSettings
    {
        /** @var UpdateProductCollectionSettings|null $value */
        $value = $this->getAttribute('productCollectionSettings');

        return $value;
    }

    /**
     * Sets the productCollectionSettings value.
     *
     * @param UpdateProductCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCollectionSettings(UpdateProductCollectionSettings|array|null $value): self
    {
        $this->setAttribute('productCollectionSettings', $value);

        return $this;
    }

    /**
     * Returns the productVideoSettings value.
     *
     * @return UpdateProductVideoSettings|null
     */
    public function getProductVideoSettings(): ?UpdateProductVideoSettings
    {
        /** @var UpdateProductVideoSettings|null $value */
        $value = $this->getAttribute('productVideoSettings');

        return $value;
    }

    /**
     * Sets the productVideoSettings value.
     *
     * @param UpdateProductVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductVideoSettings(UpdateProductVideoSettings|array|null $value): self
    {
        $this->setAttribute('productVideoSettings', $value);

        return $this;
    }

    /**
     * Returns the responsiveEcommerceSettings value.
     *
     * @return UpdateResponsiveEcommerceSettings|null
     */
    public function getResponsiveEcommerceSettings(): ?UpdateResponsiveEcommerceSettings
    {
        /** @var UpdateResponsiveEcommerceSettings|null $value */
        $value = $this->getAttribute('responsiveEcommerceSettings');

        return $value;
    }

    /**
     * Sets the responsiveEcommerceSettings value.
     *
     * @param UpdateResponsiveEcommerceSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setResponsiveEcommerceSettings(UpdateResponsiveEcommerceSettings|array|null $value): self
    {
        $this->setAttribute('responsiveEcommerceSettings', $value);

        return $this;
    }

    /**
     * Returns the storeSpotlightSettings value.
     *
     * @return UpdateStoreSpotlightSettings|null
     */
    public function getStoreSpotlightSettings(): ?UpdateStoreSpotlightSettings
    {
        /** @var UpdateStoreSpotlightSettings|null $value */
        $value = $this->getAttribute('storeSpotlightSettings');

        return $value;
    }

    /**
     * Sets the storeSpotlightSettings value.
     *
     * @param UpdateStoreSpotlightSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreSpotlightSettings(UpdateStoreSpotlightSettings|array|null $value): self
    {
        $this->setAttribute('storeSpotlightSettings', $value);

        return $this;
    }
}
