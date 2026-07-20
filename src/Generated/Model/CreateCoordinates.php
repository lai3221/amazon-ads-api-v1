<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCoordinates schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCoordinates.
 */
final class CreateCoordinates extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCoordinates';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'x' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'y' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns X coordinate..
     *
     * @return int|float|null
     */
    public function getX(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('x');

        return $value;
    }

    /**
     * Sets X coordinate..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setX(int|float|null $value): self
    {
        $this->setAttribute('x', $value);

        return $this;
    }

    /**
     * Returns Y coordinate..
     *
     * @return int|float|null
     */
    public function getY(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('y');

        return $value;
    }

    /**
     * Sets Y coordinate..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setY(int|float|null $value): self
    {
        $this->setAttribute('y', $value);

        return $this;
    }
}
