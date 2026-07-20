<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvReachForecast schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvReachForecast.
 */
final class LinearTvReachForecast extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvReachForecast';

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
        'endDate' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'linearTvInventoryAllocation' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvInventoryAllocation::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
        'linearTvReachForecastId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'linearTvReachPercent' => [
            'type' => 'number',
            'required' => true,
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
     * Returns The end date of the Linear TV Reach Forecast..
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
     * Sets The end date of the Linear TV Reach Forecast..
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
     * Returns Inventory allocation for the Linear TV Reach Forecast..
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
     * Sets Inventory allocation for the Linear TV Reach Forecast..
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
     * Returns A unique identifier for a Linear TV Reach Forecast..
     *
     * @return string|null
     */
    public function getLinearTvReachForecastId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('linearTvReachForecastId');

        return $value;
    }

    /**
     * Sets A unique identifier for a Linear TV Reach Forecast..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLinearTvReachForecastId(?string $value): self
    {
        $this->setAttribute('linearTvReachForecastId', $value);

        return $this;
    }

    /**
     * Returns The forecasted reach percent value..
     *
     * @return int|float|null
     */
    public function getLinearTvReachPercent(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('linearTvReachPercent');

        return $value;
    }

    /**
     * Sets The forecasted reach percent value..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLinearTvReachPercent(int|float|null $value): self
    {
        $this->setAttribute('linearTvReachPercent', $value);

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
     * Returns The start date of the Linear TV Reach Forecast..
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
     * Sets The start date of the Linear TV Reach Forecast..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDate(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDate', $value);

        return $this;
    }
}
