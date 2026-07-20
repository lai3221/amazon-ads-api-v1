<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Linear TV Inventory Allocation.
 *
 * @generated from Amazon Ads API v1 schema CreateLinearTvInventoryAllocation.
 */
final class CreateLinearTvInventoryAllocation extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLinearTvInventoryAllocation';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'grossRatingPoint' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'inventoryType' => [
            'type' => 'enum',
            'class' => LinearTvInventoryType::class,
            'required' => true,
            'nullable' => false,
        ],
        'linearTvDaypartId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Gross Rating Point (GRP) for the Linear TV inventory..
     *
     * @return int|float|null
     */
    public function getGrossRatingPoint(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('grossRatingPoint');

        return $value;
    }

    /**
     * Sets Gross Rating Point (GRP) for the Linear TV inventory..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setGrossRatingPoint(int|float|null $value): self
    {
        $this->setAttribute('grossRatingPoint', $value);

        return $this;
    }

    /**
     * Returns the inventoryType value.
     *
     * @return LinearTvInventoryType|null
     */
    public function getInventoryType(): ?LinearTvInventoryType
    {
        /** @var LinearTvInventoryType|null $value */
        $value = $this->getAttribute('inventoryType');

        return $value;
    }

    /**
     * Sets the inventoryType value.
     *
     * @param LinearTvInventoryType|string|null $value New property value.
     * @return $this
     */
    public function setInventoryType(LinearTvInventoryType|string|null $value): self
    {
        $this->setAttribute('inventoryType', $value);

        return $this;
    }

    /**
     * Returns A unique identifier of the daypart associated with the Linear TV inventory..
     *
     * @return string|null
     */
    public function getLinearTvDaypartId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('linearTvDaypartId');

        return $value;
    }

    /**
     * Sets A unique identifier of the daypart associated with the Linear TV inventory..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLinearTvDaypartId(?string $value): self
    {
        $this->setAttribute('linearTvDaypartId', $value);

        return $this;
    }
}
