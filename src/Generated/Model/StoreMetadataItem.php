<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreMetadataItem schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreMetadataItem.
 */
final class StoreMetadataItem extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreMetadataItem';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'alt' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'filename' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreTileType::class,
            'required' => false,
            'nullable' => false,
        ],
        'url' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Alternative text..
     *
     * @return string|null
     */
    public function getAlt(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('alt');

        return $value;
    }

    /**
     * Sets Alternative text..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAlt(?string $value): self
    {
        $this->setAttribute('alt', $value);

        return $this;
    }

    /**
     * Returns Asset identifier..
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
     * Sets Asset identifier..
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
     * Returns Name of the file..
     *
     * @return string|null
     */
    public function getFilename(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('filename');

        return $value;
    }

    /**
     * Sets Name of the file..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFilename(?string $value): self
    {
        $this->setAttribute('filename', $value);

        return $this;
    }

    /**
     * Returns Key identifier for the image..
     *
     * @return string|null
     */
    public function getImageKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('imageKey');

        return $value;
    }

    /**
     * Sets Key identifier for the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageKey(?string $value): self
    {
        $this->setAttribute('imageKey', $value);

        return $this;
    }

    /**
     * Returns The imageUrl of the item..
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
     * Sets The imageUrl of the item..
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
     * Returns the type value.
     *
     * @return StoreTileType|null
     */
    public function getType(): ?StoreTileType
    {
        /** @var StoreTileType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreTileType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreTileType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }

    /**
     * Returns URL of the item..
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('url');

        return $value;
    }

    /**
     * Sets URL of the item..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUrl(?string $value): self
    {
        $this->setAttribute('url', $value);

        return $this;
    }
}
