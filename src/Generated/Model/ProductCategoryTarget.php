<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets a specific customer search term.
 *
 * @generated from Amazon Ads API v1 schema ProductCategoryTarget.
 */
final class ProductCategoryTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCategoryTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'matchType' => [
            'type' => 'enum',
            'class' => ProductCategoryMatchType::class,
            'required' => false,
            'nullable' => false,
        ],
        'productCategoryRefinement' => [
            'type' => 'model',
            'class' => ProductCategoryRefinementValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'productGenreRefinement' => [
            'type' => 'model',
            'class' => ProductGenreRefinement::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the matchType value.
     *
     * @return ProductCategoryMatchType|null
     */
    public function getMatchType(): ?ProductCategoryMatchType
    {
        /** @var ProductCategoryMatchType|null $value */
        $value = $this->getAttribute('matchType');

        return $value;
    }

    /**
     * Sets the matchType value.
     *
     * @param ProductCategoryMatchType|string|null $value New property value.
     * @return $this
     */
    public function setMatchType(ProductCategoryMatchType|string|null $value): self
    {
        $this->setAttribute('matchType', $value);

        return $this;
    }

    /**
     * Returns the productCategoryRefinement value.
     *
     * @return ProductCategoryRefinementValue|null
     */
    public function getProductCategoryRefinement(): ?ProductCategoryRefinementValue
    {
        /** @var ProductCategoryRefinementValue|null $value */
        $value = $this->getAttribute('productCategoryRefinement');

        return $value;
    }

    /**
     * Sets the productCategoryRefinement value.
     *
     * @param ProductCategoryRefinementValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCategoryRefinement(ProductCategoryRefinementValue|array|null $value): self
    {
        $this->setAttribute('productCategoryRefinement', $value);

        return $this;
    }

    /**
     * Returns the productGenreRefinement value.
     *
     * @return ProductGenreRefinement|null
     */
    public function getProductGenreRefinement(): ?ProductGenreRefinement
    {
        /** @var ProductGenreRefinement|null $value */
        $value = $this->getAttribute('productGenreRefinement');

        return $value;
    }

    /**
     * Sets the productGenreRefinement value.
     *
     * @param ProductGenreRefinement|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductGenreRefinement(ProductGenreRefinement|array|null $value): self
    {
        $this->setAttribute('productGenreRefinement', $value);

        return $this;
    }
}
