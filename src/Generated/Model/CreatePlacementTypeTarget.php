<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the placement type.
 *
 * @generated from Amazon Ads API v1 schema CreatePlacementTypeTarget.
 */
final class CreatePlacementTypeTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreatePlacementTypeTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'placementType' => [
            'type' => 'enum',
            'class' => PlacementType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the placementType value.
     *
     * @return PlacementType|null
     */
    public function getPlacementType(): ?PlacementType
    {
        /** @var PlacementType|null $value */
        $value = $this->getAttribute('placementType');

        return $value;
    }

    /**
     * Sets the placementType value.
     *
     * @param PlacementType|string|null $value New property value.
     * @return $this
     */
    public function setPlacementType(PlacementType|string|null $value): self
    {
        $this->setAttribute('placementType', $value);

        return $this;
    }
}
