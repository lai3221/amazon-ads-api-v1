<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Dimension-based bid rule expression with conditions and actions.
 *
 * @generated from Amazon Ads API v1 schema CreateDimensionRuleExpression.
 */
final class CreateDimensionRuleExpression extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDimensionRuleExpression';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'actions' => [
            'type' => 'model',
            'class' => CreateDimensionRuleAction::class,
            'required' => true,
            'nullable' => false,
        ],
        'conditions' => [
            'type' => 'model',
            'class' => CreateDimensionRuleCondition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the actions value.
     *
     * @return CreateDimensionRuleAction|null
     */
    public function getActions(): ?CreateDimensionRuleAction
    {
        /** @var CreateDimensionRuleAction|null $value */
        $value = $this->getAttribute('actions');

        return $value;
    }

    /**
     * Sets the actions value.
     *
     * @param CreateDimensionRuleAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setActions(CreateDimensionRuleAction|array|null $value): self
    {
        $this->setAttribute('actions', $value);

        return $this;
    }

    /**
     * Returns the conditions value.
     *
     * @return CreateDimensionRuleCondition|null
     */
    public function getConditions(): ?CreateDimensionRuleCondition
    {
        /** @var CreateDimensionRuleCondition|null $value */
        $value = $this->getAttribute('conditions');

        return $value;
    }

    /**
     * Sets the conditions value.
     *
     * @param CreateDimensionRuleCondition|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setConditions(CreateDimensionRuleCondition|array|null $value): self
    {
        $this->setAttribute('conditions', $value);

        return $this;
    }
}
