<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ProductCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ProductCreative.
 */
final class ProductCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productCreativeSettings' => [
            'type' => 'model',
            'class' => ProductCreativeSettings::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the productCreativeSettings value.
     *
     * @return ProductCreativeSettings|null
     */
    public function getProductCreativeSettings(): ?ProductCreativeSettings
    {
        /** @var ProductCreativeSettings|null $value */
        $value = $this->getAttribute('productCreativeSettings');

        return $value;
    }

    /**
     * Sets the productCreativeSettings value.
     *
     * @param ProductCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCreativeSettings(ProductCreativeSettings|array|null $value): self
    {
        $this->setAttribute('productCreativeSettings', $value);

        return $this;
    }
}
