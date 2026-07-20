<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateProductCategoryRefinementMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateProductCategoryRefinementMarketplaceSetting.
 */
final class CreateProductCategoryRefinementMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductCategoryRefinementMarketplaceSetting';

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
            'class' => CreateProductCategoryRefinement::class,
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
     * @return CreateProductCategoryRefinement|null
     */
    public function getProductCategoryRefinement(): ?CreateProductCategoryRefinement
    {
        /** @var CreateProductCategoryRefinement|null $value */
        $value = $this->getAttribute('productCategoryRefinement');

        return $value;
    }

    /**
     * Sets the productCategoryRefinement value.
     *
     * @param CreateProductCategoryRefinement|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCategoryRefinement(CreateProductCategoryRefinement|array|null $value): self
    {
        $this->setAttribute('productCategoryRefinement', $value);

        return $this;
    }
}
