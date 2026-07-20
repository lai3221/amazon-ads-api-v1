<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ProductCategoryRefinementValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ProductCategoryRefinementValue.
 */
final class ProductCategoryRefinementValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCategoryRefinementValue';

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
                'class' => ProductCategoryRefinementMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'productCategoryRefinement' => [
            'type' => 'model',
            'class' => ProductCategoryRefinement::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Marketplace specific product category refinements. Either the value or the marketplaceSettings should always be specified..
     *
     * @return list<ProductCategoryRefinementMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<ProductCategoryRefinementMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets Marketplace specific product category refinements. Either the value or the marketplaceSettings should always be specified..
     *
     * @param list<ProductCategoryRefinementMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }

    /**
     * Returns the productCategoryRefinement value.
     *
     * @return ProductCategoryRefinement|null
     */
    public function getProductCategoryRefinement(): ?ProductCategoryRefinement
    {
        /** @var ProductCategoryRefinement|null $value */
        $value = $this->getAttribute('productCategoryRefinement');

        return $value;
    }

    /**
     * Sets the productCategoryRefinement value.
     *
     * @param ProductCategoryRefinement|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCategoryRefinement(ProductCategoryRefinement|array|null $value): self
    {
        $this->setAttribute('productCategoryRefinement', $value);

        return $this;
    }
}
