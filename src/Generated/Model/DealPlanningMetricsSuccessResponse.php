<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealPlanningMetricsSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealPlanningMetricsSuccessResponse.
 */
final class DealPlanningMetricsSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealPlanningMetricsSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dealPlanningMetricses' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DealPlanningMetrics::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the dealPlanningMetricses value.
     *
     * @return list<DealPlanningMetrics>|null
     */
    public function getDealPlanningMetricses(): ?array
    {
        /** @var list<DealPlanningMetrics>|null $value */
        $value = $this->getAttribute('dealPlanningMetricses');

        return $value;
    }

    /**
     * Sets the dealPlanningMetricses value.
     *
     * @param list<DealPlanningMetrics>|null $value New property value.
     * @return $this
     */
    public function setDealPlanningMetricses(?array $value): self
    {
        $this->setAttribute('dealPlanningMetricses', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
