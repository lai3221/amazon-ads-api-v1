<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateFlightBudget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateFlightBudget.
 */
final class CreateFlightBudget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateFlightBudget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budgetType' => [
            'type' => 'enum',
            'class' => BudgetType::class,
            'required' => true,
            'nullable' => false,
        ],
        'budgetValue' => [
            'type' => 'model',
            'class' => CreateBudgetValue::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budgetType value.
     *
     * @return BudgetType|null
     */
    public function getBudgetType(): ?BudgetType
    {
        /** @var BudgetType|null $value */
        $value = $this->getAttribute('budgetType');

        return $value;
    }

    /**
     * Sets the budgetType value.
     *
     * @param BudgetType|string|null $value New property value.
     * @return $this
     */
    public function setBudgetType(BudgetType|string|null $value): self
    {
        $this->setAttribute('budgetType', $value);

        return $this;
    }

    /**
     * Returns the budgetValue value.
     *
     * @return CreateBudgetValue|null
     */
    public function getBudgetValue(): ?CreateBudgetValue
    {
        /** @var CreateBudgetValue|null $value */
        $value = $this->getAttribute('budgetValue');

        return $value;
    }

    /**
     * Sets the budgetValue value.
     *
     * @param CreateBudgetValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetValue(CreateBudgetValue|array|null $value): self
    {
        $this->setAttribute('budgetValue', $value);

        return $this;
    }
}
