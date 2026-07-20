<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ProductValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ProductValue.
 */
final class ProductValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ProductMarketplaceSetting::class,
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
    ];

    /**
     * Returns The product ids at specific marketplace level. Either the product id or the marketplace settings should always be specified..
     *
     * @return list<ProductMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<ProductMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets The product ids at specific marketplace level. Either the product id or the marketplace settings should always be specified..
     *
     * @param list<ProductMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }

    /**
     * Returns The product identifier. Either the product id or the marketplace settings should always be specified..
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
     * Sets The product identifier. Either the product id or the marketplace settings should always be specified..
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
