<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvIncrementalReachForecast schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvIncrementalReachForecast.
 */
final class LinearTvIncrementalReachForecast extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvIncrementalReachForecast';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'creationDateTime' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'deduplicatedReachPercent' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'endDate' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'linearTvIncrementalReachForecastId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'linearTvInventoryAllocation' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvInventoryAllocation::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'linearTvOnlyReachPercent' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
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
        'overlapReachPercent' => [
            'type' => 'number',
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
                'class' => ReachForecastBudgetAllocation::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
        'streamingTvExclusiveReachRate' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'streamingTvIncrementalReachRate' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'streamingTvOnlyReachPercent' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The date time that the reach forecast was created..
     *
     * @return string|null
     */
    public function getCreationDateTime(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets The date time that the reach forecast was created..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(?string $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns Total combined reach percentage across both channels..
     *
     * @return int|float|null
     */
    public function getDeduplicatedReachPercent(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('deduplicatedReachPercent');

        return $value;
    }

    /**
     * Sets Total combined reach percentage across both channels..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setDeduplicatedReachPercent(int|float|null $value): self
    {
        $this->setAttribute('deduplicatedReachPercent', $value);

        return $this;
    }

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
     * Returns A unique identifier for a Linear TV Incremental Reach Forecast..
     *
     * @return string|null
     */
    public function getLinearTvIncrementalReachForecastId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('linearTvIncrementalReachForecastId');

        return $value;
    }

    /**
     * Sets A unique identifier for a Linear TV Incremental Reach Forecast..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLinearTvIncrementalReachForecastId(?string $value): self
    {
        $this->setAttribute('linearTvIncrementalReachForecastId', $value);

        return $this;
    }

    /**
     * Returns Inventory allocation for the Linear TV Incremental Reach Forecast..
     *
     * @return list<LinearTvInventoryAllocation>|null
     */
    public function getLinearTvInventoryAllocation(): ?array
    {
        /** @var list<LinearTvInventoryAllocation>|null $value */
        $value = $this->getAttribute('linearTvInventoryAllocation');

        return $value;
    }

    /**
     * Sets Inventory allocation for the Linear TV Incremental Reach Forecast..
     *
     * @param list<LinearTvInventoryAllocation>|null $value New property value.
     * @return $this
     */
    public function setLinearTvInventoryAllocation(?array $value): self
    {
        $this->setAttribute('linearTvInventoryAllocation', $value);

        return $this;
    }

    /**
     * Returns Linear TV Incremental (unique) reach percentage..
     *
     * @return int|float|null
     */
    public function getLinearTvOnlyReachPercent(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('linearTvOnlyReachPercent');

        return $value;
    }

    /**
     * Sets Linear TV Incremental (unique) reach percentage..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLinearTvOnlyReachPercent(int|float|null $value): self
    {
        $this->setAttribute('linearTvOnlyReachPercent', $value);

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
     * Returns Overlapped reach percentage between Streaming TV and Linear TV..
     *
     * @return int|float|null
     */
    public function getOverlapReachPercent(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('overlapReachPercent');

        return $value;
    }

    /**
     * Sets Overlapped reach percentage between Streaming TV and Linear TV..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setOverlapReachPercent(int|float|null $value): self
    {
        $this->setAttribute('overlapReachPercent', $value);

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
     * @return list<ReachForecastBudgetAllocation>|null
     */
    public function getStreamingTvBudgetAllocation(): ?array
    {
        /** @var list<ReachForecastBudgetAllocation>|null $value */
        $value = $this->getAttribute('streamingTvBudgetAllocation');

        return $value;
    }

    /**
     * Sets Budget allocation for the list of Reach Forecast to be compared on top of Linear TV reach..
     *
     * @param list<ReachForecastBudgetAllocation>|null $value New property value.
     * @return $this
     */
    public function setStreamingTvBudgetAllocation(?array $value): self
    {
        $this->setAttribute('streamingTvBudgetAllocation', $value);

        return $this;
    }

    /**
     * Returns The percentage of streaming TV reach that wasn't exposed to a linear TV campaign. streamingTvOnlyReachPercent / linearTvReachPercent 100%..
     *
     * @return int|float|null
     */
    public function getStreamingTvExclusiveReachRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('streamingTvExclusiveReachRate');

        return $value;
    }

    /**
     * Sets The percentage of streaming TV reach that wasn't exposed to a linear TV campaign. streamingTvOnlyReachPercent / linearTvReachPercent 100%..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setStreamingTvExclusiveReachRate(int|float|null $value): self
    {
        $this->setAttribute('streamingTvExclusiveReachRate', $value);

        return $this;
    }

    /**
     * Returns The percentage of unique households/individuals that were reached on streaming TV inventory compared to linear TV. Households/individuals that are included in linear TV reach aren't counted in Streaming TV reach. streamingTvOnlyReachPercent / linearTvReach..
     *
     * @return int|float|null
     */
    public function getStreamingTvIncrementalReachRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('streamingTvIncrementalReachRate');

        return $value;
    }

    /**
     * Sets The percentage of unique households/individuals that were reached on streaming TV inventory compared to linear TV. Households/individuals that are included in linear TV reach aren't counted in Streaming TV reach. streamingTvOnlyReachPercent / linearTvReach..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setStreamingTvIncrementalReachRate(int|float|null $value): self
    {
        $this->setAttribute('streamingTvIncrementalReachRate', $value);

        return $this;
    }

    /**
     * Returns Streaming TV Incremental (unique) reach percentage..
     *
     * @return int|float|null
     */
    public function getStreamingTvOnlyReachPercent(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('streamingTvOnlyReachPercent');

        return $value;
    }

    /**
     * Sets Streaming TV Incremental (unique) reach percentage..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setStreamingTvOnlyReachPercent(int|float|null $value): self
    {
        $this->setAttribute('streamingTvOnlyReachPercent', $value);

        return $this;
    }
}
