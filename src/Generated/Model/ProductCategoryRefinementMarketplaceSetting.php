<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ProductCategoryRefinementMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ProductCategoryRefinementMarketplaceSetting.
 */
final class ProductCategoryRefinementMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCategoryRefinementMarketplaceSetting';

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
        'productCategoryRefinement' => [
            'type' => 'model',
            'class' => ProductCategoryRefinement::class,
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
