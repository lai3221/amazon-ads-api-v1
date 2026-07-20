<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCampaignOptimizations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCampaignOptimizations.
 */
final class CreateCampaignOptimizations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCampaignOptimizations';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bidSettings' => [
            'type' => 'model',
            'class' => CreateBidSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'budgetSettings' => [
            'type' => 'model',
            'class' => CreateBudgetSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalSettings' => [
            'type' => 'model',
            'class' => CreateGoalSettings::class,
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
     * @return CreateBidSettings|null
     */
    public function getBidSettings(): ?CreateBidSettings
    {
        /** @var CreateBidSettings|null $value */
        $value = $this->getAttribute('bidSettings');

        return $value;
    }

    /**
     * Sets the bidSettings value.
     *
     * @param CreateBidSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBidSettings(CreateBidSettings|array|null $value): self
    {
        $this->setAttribute('bidSettings', $value);

        return $this;
    }

    /**
     * Returns the budgetSettings value.
     *
     * @return CreateBudgetSettings|null
     */
    public function getBudgetSettings(): ?CreateBudgetSettings
    {
        /** @var CreateBudgetSettings|null $value */
        $value = $this->getAttribute('budgetSettings');

        return $value;
    }

    /**
     * Sets the budgetSettings value.
     *
     * @param CreateBudgetSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudgetSettings(CreateBudgetSettings|array|null $value): self
    {
        $this->setAttribute('budgetSettings', $value);

        return $this;
    }

    /**
     * Returns the goalSettings value.
     *
     * @return CreateGoalSettings|null
     */
    public function getGoalSettings(): ?CreateGoalSettings
    {
        /** @var CreateGoalSettings|null $value */
        $value = $this->getAttribute('goalSettings');

        return $value;
    }

    /**
     * Sets the goalSettings value.
     *
     * @param CreateGoalSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalSettings(CreateGoalSettings|array|null $value): self
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
