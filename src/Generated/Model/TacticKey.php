<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A tactic type paired with its compatible inventory type.
 *
 * @generated from Amazon Ads API v1 schema TacticKey.
 */
final class TacticKey extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TacticKey';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'primaryInventoryType' => [
            'type' => 'enum',
            'class' => PrimaryInventoryType::class,
            'required' => true,
            'nullable' => false,
        ],
        'tacticType' => [
            'type' => 'enum',
            'class' => AutomatedTargetingTactic::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the primaryInventoryType value.
     *
     * @return PrimaryInventoryType|null
     */
    public function getPrimaryInventoryType(): ?PrimaryInventoryType
    {
        /** @var PrimaryInventoryType|null $value */
        $value = $this->getAttribute('primaryInventoryType');

        return $value;
    }

    /**
     * Sets the primaryInventoryType value.
     *
     * @param PrimaryInventoryType|string|null $value New property value.
     * @return $this
     */
    public function setPrimaryInventoryType(PrimaryInventoryType|string|null $value): self
    {
        $this->setAttribute('primaryInventoryType', $value);

        return $this;
    }

    /**
     * Returns the tacticType value.
     *
     * @return AutomatedTargetingTactic|null
     */
    public function getTacticType(): ?AutomatedTargetingTactic
    {
        /** @var AutomatedTargetingTactic|null $value */
        $value = $this->getAttribute('tacticType');

        return $value;
    }

    /**
     * Sets the tacticType value.
     *
     * @param AutomatedTargetingTactic|string|null $value New property value.
     * @return $this
     */
    public function setTacticType(AutomatedTargetingTactic|string|null $value): self
    {
        $this->setAttribute('tacticType', $value);

        return $this;
    }
}
