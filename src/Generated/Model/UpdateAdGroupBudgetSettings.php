<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAdGroupBudgetSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAdGroupBudgetSettings.
 */
final class UpdateAdGroupBudgetSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdGroupBudgetSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budgetAllocation' => [
            'type' => 'enum',
            'class' => BudgetAllocation::class,
            'required' => false,
            'nullable' => false,
        ],
        'dailyMinSpendValue' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budgetAllocation value.
     *
     * @return BudgetAllocation|null
     */
    public function getBudgetAllocation(): ?BudgetAllocation
    {
        /** @var BudgetAllocation|null $value */
        $value = $this->getAttribute('budgetAllocation');

        return $value;
    }

    /**
     * Sets the budgetAllocation value.
     *
     * @param BudgetAllocation|string|null $value New property value.
     * @return $this
     */
    public function setBudgetAllocation(BudgetAllocation|string|null $value): self
    {
        $this->setAttribute('budgetAllocation', $value);

        return $this;
    }

    /**
     * Returns Denotes the daily minimum spend on the ad group in local currency..
     *
     * @return int|float|null
     */
    public function getDailyMinSpendValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('dailyMinSpendValue');

        return $value;
    }

    /**
     * Sets Denotes the daily minimum spend on the ad group in local currency..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setDailyMinSpendValue(int|float|null $value): self
    {
        $this->setAttribute('dailyMinSpendValue', $value);

        return $this;
    }
}
