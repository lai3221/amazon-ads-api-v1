<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreTilePosition schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreTilePosition.
 */
final class CreateStoreTilePosition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreTilePosition';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'x' => [
            'type' => 'enum',
            'class' => HorizontalPosition::class,
            'required' => false,
            'nullable' => false,
        ],
        'y' => [
            'type' => 'enum',
            'class' => VerticalPosition::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the x value.
     *
     * @return HorizontalPosition|null
     */
    public function getX(): ?HorizontalPosition
    {
        /** @var HorizontalPosition|null $value */
        $value = $this->getAttribute('x');

        return $value;
    }

    /**
     * Sets the x value.
     *
     * @param HorizontalPosition|string|null $value New property value.
     * @return $this
     */
    public function setX(HorizontalPosition|string|null $value): self
    {
        $this->setAttribute('x', $value);

        return $this;
    }

    /**
     * Returns the y value.
     *
     * @return VerticalPosition|null
     */
    public function getY(): ?VerticalPosition
    {
        /** @var VerticalPosition|null $value */
        $value = $this->getAttribute('y');

        return $value;
    }

    /**
     * Sets the y value.
     *
     * @param VerticalPosition|string|null $value New property value.
     * @return $this
     */
    public function setY(VerticalPosition|string|null $value): self
    {
        $this->setAttribute('y', $value);

        return $this;
    }
}
