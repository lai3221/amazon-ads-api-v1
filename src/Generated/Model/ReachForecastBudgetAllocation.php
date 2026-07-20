<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ReachForecastBudgetAllocation schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ReachForecastBudgetAllocation.
 */
final class ReachForecastBudgetAllocation extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReachForecastBudgetAllocation';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budget' => [
            'type' => 'model',
            'class' => Budget::class,
            'required' => true,
            'nullable' => false,
        ],
        'reachForecastId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budget value.
     *
     * @return Budget|null
     */
    public function getBudget(): ?Budget
    {
        /** @var Budget|null $value */
        $value = $this->getAttribute('budget');

        return $value;
    }

    /**
     * Sets the budget value.
     *
     * @param Budget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudget(Budget|array|null $value): self
    {
        $this->setAttribute('budget', $value);

        return $this;
    }

    /**
     * Returns The identifier for the Reach Forecast..
     *
     * @return string|null
     */
    public function getReachForecastId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('reachForecastId');

        return $value;
    }

    /**
     * Sets The identifier for the Reach Forecast..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setReachForecastId(?string $value): self
    {
        $this->setAttribute('reachForecastId', $value);

        return $this;
    }
}
