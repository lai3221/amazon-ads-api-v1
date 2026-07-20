<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateBudgetSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateBudgetSettings.
 */
final class CreateBudgetSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateBudgetSettings';

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
        'flightBudgetRolloverStrategy' => [
            'type' => 'enum',
            'class' => RolloverStrategy::class,
            'required' => false,
            'nullable' => false,
        ],
        'offAmazonBudgetControlStrategy' => [
            'type' => 'enum',
            'class' => OffAmazonBudgetControlStrategy::class,
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
     * Returns the flightBudgetRolloverStrategy value.
     *
     * @return RolloverStrategy|null
     */
    public function getFlightBudgetRolloverStrategy(): ?RolloverStrategy
    {
        /** @var RolloverStrategy|null $value */
        $value = $this->getAttribute('flightBudgetRolloverStrategy');

        return $value;
    }

    /**
     * Sets the flightBudgetRolloverStrategy value.
     *
     * @param RolloverStrategy|string|null $value New property value.
     * @return $this
     */
    public function setFlightBudgetRolloverStrategy(RolloverStrategy|string|null $value): self
    {
        $this->setAttribute('flightBudgetRolloverStrategy', $value);

        return $this;
    }

    /**
     * Returns the offAmazonBudgetControlStrategy value.
     *
     * @return OffAmazonBudgetControlStrategy|null
     */
    public function getOffAmazonBudgetControlStrategy(): ?OffAmazonBudgetControlStrategy
    {
        /** @var OffAmazonBudgetControlStrategy|null $value */
        $value = $this->getAttribute('offAmazonBudgetControlStrategy');

        return $value;
    }

    /**
     * Sets the offAmazonBudgetControlStrategy value.
     *
     * @param OffAmazonBudgetControlStrategy|string|null $value New property value.
     * @return $this
     */
    public function setOffAmazonBudgetControlStrategy(OffAmazonBudgetControlStrategy|string|null $value): self
    {
        $this->setAttribute('offAmazonBudgetControlStrategy', $value);

        return $this;
    }
}
