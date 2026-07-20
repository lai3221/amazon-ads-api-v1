<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Dimension-based bid rule expression with conditions and actions.
 *
 * @generated from Amazon Ads API v1 schema DimensionRuleExpression.
 */
final class DimensionRuleExpression extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DimensionRuleExpression';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'actions' => [
            'type' => 'model',
            'class' => DimensionRuleAction::class,
            'required' => true,
            'nullable' => false,
        ],
        'conditions' => [
            'type' => 'model',
            'class' => DimensionRuleCondition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the actions value.
     *
     * @return DimensionRuleAction|null
     */
    public function getActions(): ?DimensionRuleAction
    {
        /** @var DimensionRuleAction|null $value */
        $value = $this->getAttribute('actions');

        return $value;
    }

    /**
     * Sets the actions value.
     *
     * @param DimensionRuleAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setActions(DimensionRuleAction|array|null $value): self
    {
        $this->setAttribute('actions', $value);

        return $this;
    }

    /**
     * Returns the conditions value.
     *
     * @return DimensionRuleCondition|null
     */
    public function getConditions(): ?DimensionRuleCondition
    {
        /** @var DimensionRuleCondition|null $value */
        $value = $this->getAttribute('conditions');

        return $value;
    }

    /**
     * Sets the conditions value.
     *
     * @param DimensionRuleCondition|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setConditions(DimensionRuleCondition|array|null $value): self
    {
        $this->setAttribute('conditions', $value);

        return $this;
    }
}
