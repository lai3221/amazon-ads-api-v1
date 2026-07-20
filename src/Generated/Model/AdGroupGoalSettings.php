<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupGoalSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupGoalSettings.
 */
final class AdGroupGoalSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupGoalSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'kpi' => [
            'type' => 'enum',
            'class' => KPI::class,
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
}
