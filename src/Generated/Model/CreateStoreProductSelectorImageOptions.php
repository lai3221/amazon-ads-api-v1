<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Image options for the product selector introduction.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreProductSelectorImageOptions.
 */
final class CreateStoreProductSelectorImageOptions extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreProductSelectorImageOptions';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'image' => [
            'type' => 'model',
            'class' => CreateStoreProductSelectorImage::class,
            'required' => true,
            'nullable' => false,
        ],
        'layoutConfiguration' => [
            'type' => 'model',
            'class' => CreateStoreProductSelectorLayoutConfiguration::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the image value.
     *
     * @return CreateStoreProductSelectorImage|null
     */
    public function getImage(): ?CreateStoreProductSelectorImage
    {
        /** @var CreateStoreProductSelectorImage|null $value */
        $value = $this->getAttribute('image');

        return $value;
    }

    /**
     * Sets the image value.
     *
     * @param CreateStoreProductSelectorImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setImage(CreateStoreProductSelectorImage|array|null $value): self
    {
        $this->setAttribute('image', $value);

        return $this;
    }

    /**
     * Returns the layoutConfiguration value.
     *
     * @return CreateStoreProductSelectorLayoutConfiguration|null
     */
    public function getLayoutConfiguration(): ?CreateStoreProductSelectorLayoutConfiguration
    {
        /** @var CreateStoreProductSelectorLayoutConfiguration|null $value */
        $value = $this->getAttribute('layoutConfiguration');

        return $value;
    }

    /**
     * Sets the layoutConfiguration value.
     *
     * @param CreateStoreProductSelectorLayoutConfiguration|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLayoutConfiguration(CreateStoreProductSelectorLayoutConfiguration|array|null $value): self
    {
        $this->setAttribute('layoutConfiguration', $value);

        return $this;
    }
}
