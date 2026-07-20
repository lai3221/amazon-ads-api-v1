<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateOptimization schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateOptimization.
 */
final class CreateOptimization extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateOptimization';

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
            'class' => CreateAdGroupBudgetSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalSettings' => [
            'type' => 'model',
            'class' => CreateAdGroupGoalSettings::class,
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
     * @return CreateAdGroupBudgetSettings|null
     */
    public function getBudgetSettings(): ?CreateAdGroupBudgetSettings
    {
        /** @var CreateAdGroupBudgetSettings|null $value */
        $value = $this->getAttribute('budgetSettings');

        return $value;
    }

    /**
     * Sets the budgetSettings value.
     *
     * @param CreateAdGroupBudgetSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetSettings(CreateAdGroupBudgetSettings|array|null $value): self
    {
        $this->setAttribute('budgetSettings', $value);

        return $this;
    }

    /**
     * Returns the goalSettings value.
     *
     * @return CreateAdGroupGoalSettings|null
     */
    public function getGoalSettings(): ?CreateAdGroupGoalSettings
    {
        /** @var CreateAdGroupGoalSettings|null $value */
        $value = $this->getAttribute('goalSettings');

        return $value;
    }

    /**
     * Sets the goalSettings value.
     *
     * @param CreateAdGroupGoalSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalSettings(CreateAdGroupGoalSettings|array|null $value): self
    {
        $this->setAttribute('goalSettings', $value);

        return $this;
    }
}
