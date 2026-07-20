<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CommonTileProperties schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CommonTileProperties.
 */
final class CommonTileProperties extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CommonTileProperties';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'size' => [
            'type' => 'enum',
            'class' => StoreTileSize::class,
            'required' => true,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreTileType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the size value.
     *
     * @return StoreTileSize|null
     */
    public function getSize(): ?StoreTileSize
    {
        /** @var StoreTileSize|null $value */
        $value = $this->getAttribute('size');

        return $value;
    }

    /**
     * Sets the size value.
     *
     * @param StoreTileSize|string|null $value New property value.
     * @return $this
     */
    public function setSize(StoreTileSize|string|null $value): self
    {
        $this->setAttribute('size', $value);

        return $this;
    }

    /**
     * Returns The unique tag for the tile to help track on performance..
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tag');

        return $value;
    }

    /**
     * Sets The unique tag for the tile to help track on performance..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTag(?string $value): self
    {
        $this->setAttribute('tag', $value);

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
}
