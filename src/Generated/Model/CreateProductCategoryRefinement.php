<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateProductCategoryRefinement schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateProductCategoryRefinement.
 */
final class CreateProductCategoryRefinement extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductCategoryRefinement';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productAgeRangeId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productAgeRangeIdResolved' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productBrandId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productBrandIdResolved' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productCategoryId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productCategoryIdResolved' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productGenreId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productPriceGreaterThan' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'productPriceLessThan' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'productPrimeShippingEligible' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'productRatingGreaterThan' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'productRatingLessThan' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The age range ID to target..
     *
     * @return string|null
     */
    public function getProductAgeRangeId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productAgeRangeId');

        return $value;
    }

    /**
     * Sets The age range ID to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductAgeRangeId(?string $value): self
    {
        $this->setAttribute('productAgeRangeId', $value);

        return $this;
    }

    /**
     * Returns The resolved age range to target..
     *
     * @return string|null
     */
    public function getProductAgeRangeIdResolved(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productAgeRangeIdResolved');

        return $value;
    }

    /**
     * Sets The resolved age range to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductAgeRangeIdResolved(?string $value): self
    {
        $this->setAttribute('productAgeRangeIdResolved', $value);

        return $this;
    }

    /**
     * Returns The brand ID to target..
     *
     * @return string|null
     */
    public function getProductBrandId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productBrandId');

        return $value;
    }

    /**
     * Sets The brand ID to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductBrandId(?string $value): self
    {
        $this->setAttribute('productBrandId', $value);

        return $this;
    }

    /**
     * Returns The resolved name of the brand..
     *
     * @return string|null
     */
    public function getProductBrandIdResolved(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productBrandIdResolved');

        return $value;
    }

    /**
     * Sets The resolved name of the brand..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductBrandIdResolved(?string $value): self
    {
        $this->setAttribute('productBrandIdResolved', $value);

        return $this;
    }

    /**
     * Returns The product category ID to target..
     *
     * @return string|null
     */
    public function getProductCategoryId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productCategoryId');

        return $value;
    }

    /**
     * Sets The product category ID to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductCategoryId(?string $value): self
    {
        $this->setAttribute('productCategoryId', $value);

        return $this;
    }

    /**
     * Returns The resolved product category..
     *
     * @return string|null
     */
    public function getProductCategoryIdResolved(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productCategoryIdResolved');

        return $value;
    }

    /**
     * Sets The resolved product category..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductCategoryIdResolved(?string $value): self
    {
        $this->setAttribute('productCategoryIdResolved', $value);

        return $this;
    }

    /**
     * Returns The product genre ID to target..
     *
     * @return string|null
     */
    public function getProductGenreId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productGenreId');

        return $value;
    }

    /**
     * Sets The product genre ID to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductGenreId(?string $value): self
    {
        $this->setAttribute('productGenreId', $value);

        return $this;
    }

    /**
     * Returns Refinement to target products with a price greater than the value within the product category..
     *
     * @return int|float|null
     */
    public function getProductPriceGreaterThan(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('productPriceGreaterThan');

        return $value;
    }

    /**
     * Sets Refinement to target products with a price greater than the value within the product category..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setProductPriceGreaterThan(int|float|null $value): self
    {
        $this->setAttribute('productPriceGreaterThan', $value);

        return $this;
    }

    /**
     * Returns Refinement to target products with a price less than the value within the product category..
     *
     * @return int|float|null
     */
    public function getProductPriceLessThan(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('productPriceLessThan');

        return $value;
    }

    /**
     * Sets Refinement to target products with a price less than the value within the product category..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setProductPriceLessThan(int|float|null $value): self
    {
        $this->setAttribute('productPriceLessThan', $value);

        return $this;
    }

    /**
     * Returns Target based on if a product is Prime-shipping eligible..
     *
     * @return bool|null
     */
    public function getProductPrimeShippingEligible(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('productPrimeShippingEligible');

        return $value;
    }

    /**
     * Sets Target based on if a product is Prime-shipping eligible..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setProductPrimeShippingEligible(?bool $value): self
    {
        $this->setAttribute('productPrimeShippingEligible', $value);

        return $this;
    }

    /**
     * Returns Refinement to target products with a rating greater than the value within the product category..
     *
     * @return int|float|null
     */
    public function getProductRatingGreaterThan(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('productRatingGreaterThan');

        return $value;
    }

    /**
     * Sets Refinement to target products with a rating greater than the value within the product category..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setProductRatingGreaterThan(int|float|null $value): self
    {
        $this->setAttribute('productRatingGreaterThan', $value);

        return $this;
    }

    /**
     * Returns Refinement to target products with a rating less than the value within the product category..
     *
     * @return int|float|null
     */
    public function getProductRatingLessThan(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('productRatingLessThan');

        return $value;
    }

    /**
     * Sets Refinement to target products with a rating less than the value within the product category..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setProductRatingLessThan(int|float|null $value): self
    {
        $this->setAttribute('productRatingLessThan', $value);

        return $this;
    }
}
