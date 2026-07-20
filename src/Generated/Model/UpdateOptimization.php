<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateOptimization schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateOptimization.
 */
final class UpdateOptimization extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateOptimization';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bidStrategy' => [
            'type' => 'enum',
            'class' => BidStrategy::class,
            'required' => false,
            'nullable' => false,
        ],
        'budgetSettings' => [
            'type' => 'model',
            'class' => UpdateAdGroupBudgetSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalSettings' => [
            'type' => 'model',
            'class' => UpdateAdGroupGoalSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the bidStrategy value.
     *
     * @return BidStrategy|null
     */
    public function getBidStrategy(): ?BidStrategy
    {
        /** @var BidStrategy|null $value */
        $value = $this->getAttribute('bidStrategy');

        return $value;
    }

    /**
     * Sets the bidStrategy value.
     *
     * @param BidStrategy|string|null $value New property value.
     * @return $this
     */
    public function setBidStrategy(BidStrategy|string|null $value): self
    {
        $this->setAttribute('bidStrategy', $value);

        return $this;
    }

    /**
     * Returns the budgetSettings value.
     *
     * @return UpdateAdGroupBudgetSettings|null
     */
    public function getBudgetSettings(): ?UpdateAdGroupBudgetSettings
    {
        /** @var UpdateAdGroupBudgetSettings|null $value */
        $value = $this->getAttribute('budgetSettings');

        return $value;
    }

    /**
     * Sets the budgetSettings value.
     *
     * @param UpdateAdGroupBudgetSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetSettings(UpdateAdGroupBudgetSettings|array|null $value): self
    {
        $this->setAttribute('budgetSettings', $value);

        return $this;
    }

    /**
     * Returns the goalSettings value.
     *
     * @return UpdateAdGroupGoalSettings|null
     */
    public function getGoalSettings(): ?UpdateAdGroupGoalSettings
    {
        /** @var UpdateAdGroupGoalSettings|null $value */
        $value = $this->getAttribute('goalSettings');

        return $value;
    }

    /**
     * Sets the goalSettings value.
     *
     * @param UpdateAdGroupGoalSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalSettings(UpdateAdGroupGoalSettings|array|null $value): self
    {
        $this->setAttribute('goalSettings', $value);

        return $this;
    }
}
