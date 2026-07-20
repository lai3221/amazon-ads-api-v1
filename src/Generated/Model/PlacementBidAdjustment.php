<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PlacementBidAdjustment schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PlacementBidAdjustment.
 */
final class PlacementBidAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PlacementBidAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'percentage' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
        'placement' => [
            'type' => 'enum',
            'class' => Placement::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The selection of the percentage change associated with a given placement and bid adjustment settings..
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
     * Sets The selection of the percentage change associated with a given placement and bid adjustment settings..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setPercentage(?int $value): self
    {
        $this->setAttribute('percentage', $value);

        return $this;
    }

    /**
     * Returns the placement value.
     *
     * @return Placement|null
     */
    public function getPlacement(): ?Placement
    {
        /** @var Placement|null $value */
        $value = $this->getAttribute('placement');

        return $value;
    }

    /**
     * Sets the placement value.
     *
     * @param Placement|string|null $value New property value.
     * @return $this
     */
    public function setPlacement(Placement|string|null $value): self
    {
        $this->setAttribute('placement', $value);

        return $this;
    }
}
