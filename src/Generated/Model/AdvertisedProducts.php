<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisedProducts schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisedProducts.
 */
final class AdvertisedProducts extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisedProducts';

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
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertisedProductMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'productId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productIdType' => [
            'type' => 'enum',
            'class' => ProductIdType::class,
            'required' => true,
            'nullable' => false,
        ],
        'resolvedProductId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'resolvedProductIdType' => [
            'type' => 'enum',
            'class' => ProductIdType::class,
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
     * Returns List of advertised product selectively applied at the given marketplace level..
     *
     * @return list<AdvertisedProductMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<AdvertisedProductMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets List of advertised product selectively applied at the given marketplace level..
     *
     * @param list<AdvertisedProductMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }

    /**
     * Returns The identifier of the advertised product..
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
     * Sets The identifier of the advertised product..
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
     * Returns the productIdType value.
     *
     * @return ProductIdType|null
     */
    public function getProductIdType(): ?ProductIdType
    {
        /** @var ProductIdType|null $value */
        $value = $this->getAttribute('productIdType');

        return $value;
    }

    /**
     * Sets the productIdType value.
     *
     * @param ProductIdType|string|null $value New property value.
     * @return $this
     */
    public function setProductIdType(ProductIdType|string|null $value): self
    {
        $this->setAttribute('productIdType', $value);

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

    /**
     * Returns the resolvedProductIdType value.
     *
     * @return ProductIdType|null
     */
    public function getResolvedProductIdType(): ?ProductIdType
    {
        /** @var ProductIdType|null $value */
        $value = $this->getAttribute('resolvedProductIdType');

        return $value;
    }

    /**
     * Sets the resolvedProductIdType value.
     *
     * @param ProductIdType|string|null $value New property value.
     * @return $this
     */
    public function setResolvedProductIdType(ProductIdType|string|null $value): self
    {
        $this->setAttribute('resolvedProductIdType', $value);

        return $this;
    }
}
