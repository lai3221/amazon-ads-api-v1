<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateCampaignOptimizations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateCampaignOptimizations.
 */
final class UpdateCampaignOptimizations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateCampaignOptimizations';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bidSettings' => [
            'type' => 'model',
            'class' => UpdateBidSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'budgetSettings' => [
            'type' => 'model',
            'class' => UpdateBudgetSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalSettings' => [
            'type' => 'model',
            'class' => UpdateGoalSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'primaryInventoryTypes' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => PrimaryInventoryType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the bidSettings value.
     *
     * @return UpdateBidSettings|null
     */
    public function getBidSettings(): ?UpdateBidSettings
    {
        /** @var UpdateBidSettings|null $value */
        $value = $this->getAttribute('bidSettings');

        return $value;
    }

    /**
     * Sets the bidSettings value.
     *
     * @param UpdateBidSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBidSettings(UpdateBidSettings|array|null $value): self
    {
        $this->setAttribute('bidSettings', $value);

        return $this;
    }

    /**
     * Returns the budgetSettings value.
     *
     * @return UpdateBudgetSettings|null
     */
    public function getBudgetSettings(): ?UpdateBudgetSettings
    {
        /** @var UpdateBudgetSettings|null $value */
        $value = $this->getAttribute('budgetSettings');

        return $value;
    }

    /**
     * Sets the budgetSettings value.
     *
     * @param UpdateBudgetSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetSettings(UpdateBudgetSettings|array|null $value): self
    {
        $this->setAttribute('budgetSettings', $value);

        return $this;
    }

    /**
     * Returns the goalSettings value.
     *
     * @return UpdateGoalSettings|null
     */
    public function getGoalSettings(): ?UpdateGoalSettings
    {
        /** @var UpdateGoalSettings|null $value */
        $value = $this->getAttribute('goalSettings');

        return $value;
    }

    /**
     * Sets the goalSettings value.
     *
     * @param UpdateGoalSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalSettings(UpdateGoalSettings|array|null $value): self
    {
        $this->setAttribute('goalSettings', $value);

        return $this;
    }

    /**
     * Returns Primary inventory type of the campaign for filtering KPIs and recommending tactics..
     *
     * @return list<PrimaryInventoryType>|null
     */
    public function getPrimaryInventoryTypes(): ?array
    {
        /** @var list<PrimaryInventoryType>|null $value */
        $value = $this->getAttribute('primaryInventoryTypes');

        return $value;
    }

    /**
     * Sets Primary inventory type of the campaign for filtering KPIs and recommending tactics..
     *
     * @param list<PrimaryInventoryType>|null $value New property value.
     * @return $this
     */
    public function setPrimaryInventoryTypes(?array $value): self
    {
        $this->setAttribute('primaryInventoryTypes', $value);

        return $this;
    }
}
