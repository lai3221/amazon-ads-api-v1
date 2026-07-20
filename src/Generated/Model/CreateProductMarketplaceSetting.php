<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateProductMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateProductMarketplaceSetting.
 */
final class CreateProductMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductMarketplaceSetting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
    ];

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
     * Returns The product id applicable at the specified marketplace..
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
     * Sets The product id applicable at the specified marketplace..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductId(?string $value): self
    {
        $this->setAttribute('productId', $value);

        return $this;
    }
}
