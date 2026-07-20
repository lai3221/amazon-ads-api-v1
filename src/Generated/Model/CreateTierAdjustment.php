<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An ordinal adjustment that expresses a ranked preference level rather than a specific numeric value.
 *
 * @generated from Amazon Ads API v1 schema CreateTierAdjustment.
 */
final class CreateTierAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTierAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adjustmentType' => [
            'type' => 'enum',
            'class' => TierAdjustmentType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adjustmentType value.
     *
     * @return TierAdjustmentType|null
     */
    public function getAdjustmentType(): ?TierAdjustmentType
    {
        /** @var TierAdjustmentType|null $value */
        $value = $this->getAttribute('adjustmentType');

        return $value;
    }

    /**
     * Sets the adjustmentType value.
     *
     * @param TierAdjustmentType|string|null $value New property value.
     * @return $this
     */
    public function setAdjustmentType(TierAdjustmentType|string|null $value): self
    {
        $this->setAttribute('adjustmentType', $value);

        return $this;
    }
}
