<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisedProductMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisedProductMarketplaceSetting.
 */
final class AdvertisedProductMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisedProductMarketplaceSetting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'globalStoreSetting' => [
            'type' => 'model',
            'class' => GlobalStoreSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'productId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'resolvedProductId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the globalStoreSetting value.
     *
     * @return GlobalStoreSettings|null
     */
    public function getGlobalStoreSetting(): ?GlobalStoreSettings
    {
        /** @var GlobalStoreSettings|null $value */
        $value = $this->getAttribute('globalStoreSetting');

        return $value;
    }

    /**
     * Sets the globalStoreSetting value.
     *
     * @param GlobalStoreSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGlobalStoreSetting(GlobalStoreSettings|array|null $value): self
    {
        $this->setAttribute('globalStoreSetting', $value);

        return $this;
    }

    /**
     * Returns the marketplace value.
     *
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('marketplace');

        return $value;
    }

    /**
     * Sets the marketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('marketplace', $value);

        return $this;
    }

    /**
     * Returns The identifier of the product advertised..
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productId');

        return $value;
    }

    /**
     * Sets The identifier of the product advertised..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductId(?string $value): self
    {
        $this->setAttribute('productId', $value);

        return $this;
    }

    /**
     * Returns The identifier of product associated with the advertised product. It's a read-only field..
     *
     * @return string|null
     */
    public function getResolvedProductId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('resolvedProductId');

        return $value;
    }

    /**
     * Sets The identifier of product associated with the advertised product. It's a read-only field..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setResolvedProductId(?string $value): self
    {
        $this->setAttribute('resolvedProductId', $value);

        return $this;
    }
}
