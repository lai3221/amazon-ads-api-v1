<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvIncrementalReachForecastCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvIncrementalReachForecastCreate.
 */
final class LinearTvIncrementalReachForecastCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvIncrementalReachForecastCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endDate' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'linearTvInventoryAllocation' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateLinearTvInventoryAllocation::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'linearTvReachPercentOverride' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'reachUnit' => [
            'type' => 'enum',
            'class' => ReachUnit::class,
            'required' => true,
            'nullable' => false,
        ],
        'startDate' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'streamingTvBudgetAllocation' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateReachForecastBudgetAllocation::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns The end date of the Linear TV Incremental Reach Forecast..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDate(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDate');

        return $value;
    }

    /**
     * Sets The end date of the Linear TV Incremental Reach Forecast..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDate(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDate', $value);

        return $this;
    }

    /**
     * Returns Inventory allocation for the Linear TV Incremental Reach Forecast..
     *
     * @return list<CreateLinearTvInventoryAllocation>|null
     */
    public function getLinearTvInventoryAllocation(): ?array
    {
        /** @var list<CreateLinearTvInventoryAllocation>|null $value */
        $value = $this->getAttribute('linearTvInventoryAllocation');

        return $value;
    }

    /**
     * Sets Inventory allocation for the Linear TV Incremental Reach Forecast..
     *
     * @param list<CreateLinearTvInventoryAllocation>|null $value New property value.
     * @return $this
     */
    public function setLinearTvInventoryAllocation(?array $value): self
    {
        $this->setAttribute('linearTvInventoryAllocation', $value);

        return $this;
    }

    /**
     * Returns Override of TV reach percentage. If not provided, the service will calculate TV reach based on internal estimation..
     *
     * @return int|float|null
     */
    public function getLinearTvReachPercentOverride(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('linearTvReachPercentOverride');

        return $value;
    }

    /**
     * Sets Override of TV reach percentage. If not provided, the service will calculate TV reach based on internal estimation..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLinearTvReachPercentOverride(int|float|null $value): self
    {
        $this->setAttribute('linearTvReachPercentOverride', $value);

        return $this;
    }

    /**
     * Returns the marketplace value.
     *
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('marketplace');

        return $value;
    }

    /**
     * Sets the marketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('marketplace', $value);

        return $this;
    }

    /**
     * Returns the reachUnit value.
     *
     * @return ReachUnit|null
     */
    public function getReachUnit(): ?ReachUnit
    {
        /** @var ReachUnit|null $value */
        $value = $this->getAttribute('reachUnit');

        return $value;
    }

    /**
     * Sets the reachUnit value.
     *
     * @param ReachUnit|string|null $value New property value.
     * @return $this
     */
    public function setReachUnit(ReachUnit|string|null $value): self
    {
        $this->setAttribute('reachUnit', $value);

        return $this;
    }

    /**
     * Returns The start date of the Linear TV Incremental Reach Forecast..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDate(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDate');

        return $value;
    }

    /**
     * Sets The start date of the Linear TV Incremental Reach Forecast..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDate(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDate', $value);

        return $this;
    }

    /**
     * Returns Budget allocation for the list of Reach Forecast to be compared on top of Linear TV reach..
     *
     * @return list<CreateReachForecastBudgetAllocation>|null
     */
    public function getStreamingTvBudgetAllocation(): ?array
    {
        /** @var list<CreateReachForecastBudgetAllocation>|null $value */
        $value = $this->getAttribute('streamingTvBudgetAllocation');

        return $value;
    }

    /**
     * Sets Budget allocation for the list of Reach Forecast to be compared on top of Linear TV reach..
     *
     * @param list<CreateReachForecastBudgetAllocation>|null $value New property value.
     * @return $this
     */
    public function setStreamingTvBudgetAllocation(?array $value): self
    {
        $this->setAttribute('streamingTvBudgetAllocation', $value);

        return $this;
    }
}
