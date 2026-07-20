<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets a specific customer search term.
 *
 * @generated from Amazon Ads API v1 schema CreateProductCategoryTarget.
 */
final class CreateProductCategoryTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductCategoryTarget';

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
            'class' => CreateProductCategoryRefinementValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'productGenreRefinement' => [
            'type' => 'model',
            'class' => CreateProductGenreRefinement::class,
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
     * @return CreateProductCategoryRefinementValue|null
     */
    public function getProductCategoryRefinement(): ?CreateProductCategoryRefinementValue
    {
        /** @var CreateProductCategoryRefinementValue|null $value */
        $value = $this->getAttribute('productCategoryRefinement');

        return $value;
    }

    /**
     * Sets the productCategoryRefinement value.
     *
     * @param CreateProductCategoryRefinementValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCategoryRefinement(CreateProductCategoryRefinementValue|array|null $value): self
    {
        $this->setAttribute('productCategoryRefinement', $value);

        return $this;
    }

    /**
     * Returns the productGenreRefinement value.
     *
     * @return CreateProductGenreRefinement|null
     */
    public function getProductGenreRefinement(): ?CreateProductGenreRefinement
    {
        /** @var CreateProductGenreRefinement|null $value */
        $value = $this->getAttribute('productGenreRefinement');

        return $value;
    }

    /**
     * Sets the productGenreRefinement value.
     *
     * @param CreateProductGenreRefinement|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductGenreRefinement(CreateProductGenreRefinement|array|null $value): self
    {
        $this->setAttribute('productGenreRefinement', $value);

        return $this;
    }
}
