<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Optimization schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Optimization.
 */
final class Optimization extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Optimization';

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
            'class' => AdGroupBudgetSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalSettings' => [
            'type' => 'model',
            'class' => AdGroupGoalSettings::class,
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
     * @return AdGroupBudgetSettings|null
     */
    public function getBudgetSettings(): ?AdGroupBudgetSettings
    {
        /** @var AdGroupBudgetSettings|null $value */
        $value = $this->getAttribute('budgetSettings');

        return $value;
    }

    /**
     * Sets the budgetSettings value.
     *
     * @param AdGroupBudgetSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetSettings(AdGroupBudgetSettings|array|null $value): self
    {
        $this->setAttribute('budgetSettings', $value);

        return $this;
    }

    /**
     * Returns the goalSettings value.
     *
     * @return AdGroupGoalSettings|null
     */
    public function getGoalSettings(): ?AdGroupGoalSettings
    {
        /** @var AdGroupGoalSettings|null $value */
        $value = $this->getAttribute('goalSettings');

        return $value;
    }

    /**
     * Sets the goalSettings value.
     *
     * @param AdGroupGoalSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalSettings(AdGroupGoalSettings|array|null $value): self
    {
        $this->setAttribute('goalSettings', $value);

        return $this;
    }
}
