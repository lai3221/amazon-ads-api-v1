<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the GoalSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema GoalSettings.
 */
final class GoalSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GoalSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'goal' => [
            'type' => 'enum',
            'class' => Goal::class,
            'required' => true,
            'nullable' => false,
        ],
        'kpi' => [
            'type' => 'enum',
            'class' => KPI::class,
            'required' => true,
            'nullable' => false,
        ],
        'kpiValue' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the currencyCode value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyCode');

        return $value;
    }

    /**
     * Sets the currencyCode value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyCode(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyCode', $value);

        return $this;
    }

    /**
     * Returns the goal value.
     *
     * @return Goal|null
     */
    public function getGoal(): ?Goal
    {
        /** @var Goal|null $value */
        $value = $this->getAttribute('goal');

        return $value;
    }

    /**
     * Sets the goal value.
     *
     * @param Goal|string|null $value New property value.
     * @return $this
     */
    public function setGoal(Goal|string|null $value): self
    {
        $this->setAttribute('goal', $value);

        return $this;
    }

    /**
     * Returns the kpi value.
     *
     * @return KPI|null
     */
    public function getKpi(): ?KPI
    {
        /** @var KPI|null $value */
        $value = $this->getAttribute('kpi');

        return $value;
    }

    /**
     * Sets the kpi value.
     *
     * @param KPI|string|null $value New property value.
     * @return $this
     */
    public function setKpi(KPI|string|null $value): self
    {
        $this->setAttribute('kpi', $value);

        return $this;
    }

    /**
     * Returns The value of the KPI that the campaign is working to optimize..
     *
     * @return int|float|null
     */
    public function getKpiValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('kpiValue');

        return $value;
    }

    /**
     * Sets The value of the KPI that the campaign is working to optimize..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setKpiValue(int|float|null $value): self
    {
        $this->setAttribute('kpiValue', $value);

        return $this;
    }
}
