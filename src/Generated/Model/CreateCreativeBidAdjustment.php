<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCreativeBidAdjustment schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCreativeBidAdjustment.
 */
final class CreateCreativeBidAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCreativeBidAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'creativeType' => [
            'type' => 'enum',
            'class' => CreativeBidAdjustmentType::class,
            'required' => false,
            'nullable' => false,
        ],
        'percentage' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the creativeType value.
     *
     * @return CreativeBidAdjustmentType|null
     */
    public function getCreativeType(): ?CreativeBidAdjustmentType
    {
        /** @var CreativeBidAdjustmentType|null $value */
        $value = $this->getAttribute('creativeType');

        return $value;
    }

    /**
     * Sets the creativeType value.
     *
     * @param CreativeBidAdjustmentType|string|null $value New property value.
     * @return $this
     */
    public function setCreativeType(CreativeBidAdjustmentType|string|null $value): self
    {
        $this->setAttribute('creativeType', $value);

        return $this;
    }

    /**
     * Returns The selection of the percentage change associated with the creative type and bid adjustment settings..
     *
     * @return int|null
     */
    public function getPercentage(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('percentage');

        return $value;
    }

    /**
     * Sets The selection of the percentage change associated with the creative type and bid adjustment settings..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setPercentage(?int $value): self
    {
        $this->setAttribute('percentage', $value);

        return $this;
    }
}
