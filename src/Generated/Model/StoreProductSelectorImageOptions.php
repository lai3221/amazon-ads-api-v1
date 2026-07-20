<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Image options for the product selector introduction.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorImageOptions.
 */
final class StoreProductSelectorImageOptions extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorImageOptions';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'image' => [
            'type' => 'model',
            'class' => StoreProductSelectorImage::class,
            'required' => true,
            'nullable' => false,
        ],
        'layoutConfiguration' => [
            'type' => 'model',
            'class' => StoreProductSelectorLayoutConfiguration::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the image value.
     *
     * @return StoreProductSelectorImage|null
     */
    public function getImage(): ?StoreProductSelectorImage
    {
        /** @var StoreProductSelectorImage|null $value */
        $value = $this->getAttribute('image');

        return $value;
    }

    /**
     * Sets the image value.
     *
     * @param StoreProductSelectorImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setImage(StoreProductSelectorImage|array|null $value): self
    {
        $this->setAttribute('image', $value);

        return $this;
    }

    /**
     * Returns the layoutConfiguration value.
     *
     * @return StoreProductSelectorLayoutConfiguration|null
     */
    public function getLayoutConfiguration(): ?StoreProductSelectorLayoutConfiguration
    {
        /** @var StoreProductSelectorLayoutConfiguration|null $value */
        $value = $this->getAttribute('layoutConfiguration');

        return $value;
    }

    /**
     * Sets the layoutConfiguration value.
     *
     * @param StoreProductSelectorLayoutConfiguration|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLayoutConfiguration(StoreProductSelectorLayoutConfiguration|array|null $value): self
    {
        $this->setAttribute('layoutConfiguration', $value);

        return $this;
    }
}
