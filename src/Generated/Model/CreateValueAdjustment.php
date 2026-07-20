<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateValueAdjustment schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateValueAdjustment.
 */
final class CreateValueAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateValueAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adjustmentType' => [
            'type' => 'enum',
            'class' => AdjustmentTypes::class,
            'required' => true,
            'nullable' => false,
        ],
        'adjustmentValue' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adjustmentType value.
     *
     * @return AdjustmentTypes|null
     */
    public function getAdjustmentType(): ?AdjustmentTypes
    {
        /** @var AdjustmentTypes|null $value */
        $value = $this->getAttribute('adjustmentType');

        return $value;
    }

    /**
     * Sets the adjustmentType value.
     *
     * @param AdjustmentTypes|string|null $value New property value.
     * @return $this
     */
    public function setAdjustmentType(AdjustmentTypes|string|null $value): self
    {
        $this->setAttribute('adjustmentType', $value);

        return $this;
    }

    /**
     * Returns the adjustmentValue value.
     *
     * @return int|float|null
     */
    public function getAdjustmentValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('adjustmentValue');

        return $value;
    }

    /**
     * Sets the adjustmentValue value.
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setAdjustmentValue(int|float|null $value): self
    {
        $this->setAttribute('adjustmentValue', $value);

        return $this;
    }
}
