<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets a specific product.
 *
 * @generated from Amazon Ads API v1 schema ProductTarget.
 */
final class ProductTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'matchType' => [
            'type' => 'enum',
            'class' => ProductMatchType::class,
            'required' => true,
            'nullable' => false,
        ],
        'product' => [
            'type' => 'model',
            'class' => ProductValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'productIdType' => [
            'type' => 'enum',
            'class' => ProductIdType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the matchType value.
     *
     * @return ProductMatchType|null
     */
    public function getMatchType(): ?ProductMatchType
    {
        /** @var ProductMatchType|null $value */
        $value = $this->getAttribute('matchType');

        return $value;
    }

    /**
     * Sets the matchType value.
     *
     * @param ProductMatchType|string|null $value New property value.
     * @return $this
     */
    public function setMatchType(ProductMatchType|string|null $value): self
    {
        $this->setAttribute('matchType', $value);

        return $this;
    }

    /**
     * Returns the product value.
     *
     * @return ProductValue|null
     */
    public function getProduct(): ?ProductValue
    {
        /** @var ProductValue|null $value */
        $value = $this->getAttribute('product');

        return $value;
    }

    /**
     * Sets the product value.
     *
     * @param ProductValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProduct(ProductValue|array|null $value): self
    {
        $this->setAttribute('product', $value);

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
}
