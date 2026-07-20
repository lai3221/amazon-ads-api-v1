<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateGoalSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateGoalSettings.
 */
final class CreateGoalSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateGoalSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
