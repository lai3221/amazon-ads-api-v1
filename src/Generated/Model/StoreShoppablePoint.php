<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreShoppablePoint schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreShoppablePoint.
 */
final class StoreShoppablePoint extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreShoppablePoint';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'coordinates' => [
            'type' => 'model',
            'class' => Coordinates::class,
            'required' => true,
            'nullable' => false,
        ],
        'productAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'tag' => [
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
    ];

    /**
     * Returns the coordinates value.
     *
     * @return Coordinates|null
     */
    public function getCoordinates(): ?Coordinates
    {
        /** @var Coordinates|null $value */
        $value = $this->getAttribute('coordinates');

        return $value;
    }

    /**
     * Sets the coordinates value.
     *
     * @param Coordinates|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCoordinates(Coordinates|array|null $value): self
    {
        $this->setAttribute('coordinates', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for the point..
     *
     * @return list<string>|null
     */
    public function getProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('productAsins');

        return $value;
    }

    /**
     * Sets Single ASIN for the point..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setProductAsins(?array $value): self
    {
        $this->setAttribute('productAsins', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the point..
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
     * Sets Unique tag for the point..
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
