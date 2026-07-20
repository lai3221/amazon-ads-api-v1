<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents an image used in the product selector introduction.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorImage.
 */
final class StoreProductSelectorImage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorImage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'fileName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageUrl' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'layout' => [
            'type' => 'enum',
            'class' => StoreProductSelectorImageLayout::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Asset ID of the image..
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetId');

        return $value;
    }

    /**
     * Sets Asset ID of the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetId(?string $value): self
    {
        $this->setAttribute('assetId', $value);

        return $this;
    }

    /**
     * Returns File name of the image..
     *
     * @return string|null
     */
    public function getFileName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('fileName');

        return $value;
    }

    /**
     * Sets File name of the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFileName(?string $value): self
    {
        $this->setAttribute('fileName', $value);

        return $this;
    }

    /**
     * Returns URL of the image..
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('imageUrl');

        return $value;
    }

    /**
     * Sets URL of the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageUrl(?string $value): self
    {
        $this->setAttribute('imageUrl', $value);

        return $this;
    }

    /**
     * Returns the layout value.
     *
     * @return StoreProductSelectorImageLayout|null
     */
    public function getLayout(): ?StoreProductSelectorImageLayout
    {
        /** @var StoreProductSelectorImageLayout|null $value */
        $value = $this->getAttribute('layout');

        return $value;
    }

    /**
     * Sets the layout value.
     *
     * @param StoreProductSelectorImageLayout|string|null $value New property value.
     * @return $this
     */
    public function setLayout(StoreProductSelectorImageLayout|string|null $value): self
    {
        $this->setAttribute('layout', $value);

        return $this;
    }
}
