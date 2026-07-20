<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealPerformanceSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealPerformanceSuccessResponse.
 */
final class DealPerformanceSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealPerformanceSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dealPerformances' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DealPerformance::class,
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
     * Returns the dealPerformances value.
     *
     * @return list<DealPerformance>|null
     */
    public function getDealPerformances(): ?array
    {
        /** @var list<DealPerformance>|null $value */
        $value = $this->getAttribute('dealPerformances');

        return $value;
    }

    /**
     * Sets the dealPerformances value.
     *
     * @param list<DealPerformance>|null $value New property value.
     * @return $this
     */
    public function setDealPerformances(?array $value): self
    {
        $this->setAttribute('dealPerformances', $value);

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
