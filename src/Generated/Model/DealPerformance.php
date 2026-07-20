<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealPerformance schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealPerformance.
 */
final class DealPerformance extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealPerformance';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => false,
            'nullable' => false,
        ],
        'advertisingDealId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'availsByDeviceType' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AvailsForDeviceType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'availsTotal' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'averageCpm' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'bidRequests' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'bidResponses' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'clickthroughCount' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'completionCount' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'conversionCount' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'dealPerformanceId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'measurableImpressions' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'metricsLastUpdated' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'performanceEndDate' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'performanceStartDate' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'recognizedBids' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'totalImpressions' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'totalSpend' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'viewableImpressions' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return AdProduct|null
     */
    public function getAdProduct(): ?AdProduct
    {
        /** @var AdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param AdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(AdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns Reference to the associated advertising deal..
     *
     * @return string|null
     */
    public function getAdvertisingDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertisingDealId');

        return $value;
    }

    /**
     * Sets Reference to the associated advertising deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDealId(?string $value): self
    {
        $this->setAttribute('advertisingDealId', $value);

        return $this;
    }

    /**
     * Returns A list of avails broken down by device type..
     *
     * @return list<AvailsForDeviceType>|null
     */
    public function getAvailsByDeviceType(): ?array
    {
        /** @var list<AvailsForDeviceType>|null $value */
        $value = $this->getAttribute('availsByDeviceType');

        return $value;
    }

    /**
     * Sets A list of avails broken down by device type..
     *
     * @param list<AvailsForDeviceType>|null $value New property value.
     * @return $this
     */
    public function setAvailsByDeviceType(?array $value): self
    {
        $this->setAttribute('availsByDeviceType', $value);

        return $this;
    }

    /**
     * Returns The total number of impression opportunities..
     *
     * @return int|null
     */
    public function getAvailsTotal(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('availsTotal');

        return $value;
    }

    /**
     * Sets The total number of impression opportunities..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setAvailsTotal(?int $value): self
    {
        $this->setAttribute('availsTotal', $value);

        return $this;
    }

    /**
     * Returns Historical cost per thousand impressions over the period of time specified..
     *
     * @return int|float|null
     */
    public function getAverageCpm(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('averageCpm');

        return $value;
    }

    /**
     * Sets Historical cost per thousand impressions over the period of time specified..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setAverageCpm(int|float|null $value): self
    {
        $this->setAttribute('averageCpm', $value);

        return $this;
    }

    /**
     * Returns The volume of bids with this deal ID that are eligible for the Amazon DSP..
     *
     * @return int|null
     */
    public function getBidRequests(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('bidRequests');

        return $value;
    }

    /**
     * Sets The volume of bids with this deal ID that are eligible for the Amazon DSP..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setBidRequests(?int $value): self
    {
        $this->setAttribute('bidRequests', $value);

        return $this;
    }

    /**
     * Returns The number of bid responses sent back to SSP or publisher for the applicable deal ID..
     *
     * @return int|null
     */
    public function getBidResponses(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('bidResponses');

        return $value;
    }

    /**
     * Sets The number of bid responses sent back to SSP or publisher for the applicable deal ID..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setBidResponses(?int $value): self
    {
        $this->setAttribute('bidResponses', $value);

        return $this;
    }

    /**
     * Returns The number of times an ad is clicked..
     *
     * @return int|null
     */
    public function getClickthroughCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('clickthroughCount');

        return $value;
    }

    /**
     * Sets The number of times an ad is clicked..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setClickthroughCount(?int $value): self
    {
        $this->setAttribute('clickthroughCount', $value);

        return $this;
    }

    /**
     * Returns The number of times a video or audio ad is completed..
     *
     * @return int|null
     */
    public function getCompletionCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('completionCount');

        return $value;
    }

    /**
     * Sets The number of times a video or audio ad is completed..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setCompletionCount(?int $value): self
    {
        $this->setAttribute('completionCount', $value);

        return $this;
    }

    /**
     * Returns The number of times an impression resulted in an action..
     *
     * @return int|null
     */
    public function getConversionCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('conversionCount');

        return $value;
    }

    /**
     * Sets The number of times an impression resulted in an action..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setConversionCount(?int $value): self
    {
        $this->setAttribute('conversionCount', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the performance record..
     *
     * @return string|null
     */
    public function getDealPerformanceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dealPerformanceId');

        return $value;
    }

    /**
     * Sets A unique identifier for the performance record..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDealPerformanceId(?string $value): self
    {
        $this->setAttribute('dealPerformanceId', $value);

        return $this;
    }

    /**
     * Returns The number of impressions that were measurable..
     *
     * @return int|null
     */
    public function getMeasurableImpressions(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('measurableImpressions');

        return $value;
    }

    /**
     * Sets The number of impressions that were measurable..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMeasurableImpressions(?int $value): self
    {
        $this->setAttribute('measurableImpressions', $value);

        return $this;
    }

    /**
     * Returns Last time the metrics were updated..
     *
     * @return \DateTimeImmutable|null
     */
    public function getMetricsLastUpdated(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('metricsLastUpdated');

        return $value;
    }

    /**
     * Sets Last time the metrics were updated..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setMetricsLastUpdated(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('metricsLastUpdated', $value);

        return $this;
    }

    /**
     * Returns End date for performance metrics period..
     *
     * @return \DateTimeImmutable|null
     */
    public function getPerformanceEndDate(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('performanceEndDate');

        return $value;
    }

    /**
     * Sets End date for performance metrics period..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setPerformanceEndDate(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('performanceEndDate', $value);

        return $this;
    }

    /**
     * Returns Start date for performance metrics period..
     *
     * @return \DateTimeImmutable|null
     */
    public function getPerformanceStartDate(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('performanceStartDate');

        return $value;
    }

    /**
     * Sets Start date for performance metrics period..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setPerformanceStartDate(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('performanceStartDate', $value);

        return $this;
    }

    /**
     * Returns The number of bid requests which include a recognized deal ID. This is divided by total bid requests for the deal to get recognition rate..
     *
     * @return int|null
     */
    public function getRecognizedBids(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('recognizedBids');

        return $value;
    }

    /**
     * Sets The number of bid requests which include a recognized deal ID. This is divided by total bid requests for the deal to get recognition rate..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setRecognizedBids(?int $value): self
    {
        $this->setAttribute('recognizedBids', $value);

        return $this;
    }

    /**
     * Returns The number of times an advertisement was displayed..
     *
     * @return int|null
     */
    public function getTotalImpressions(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('totalImpressions');

        return $value;
    }

    /**
     * Sets The number of times an advertisement was displayed..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTotalImpressions(?int $value): self
    {
        $this->setAttribute('totalImpressions', $value);

        return $this;
    }

    /**
     * Returns The total amount spent on the deal over the period of time specified..
     *
     * @return int|float|null
     */
    public function getTotalSpend(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('totalSpend');

        return $value;
    }

    /**
     * Sets The total amount spent on the deal over the period of time specified..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setTotalSpend(int|float|null $value): self
    {
        $this->setAttribute('totalSpend', $value);

        return $this;
    }

    /**
     * Returns The number of impressions that were viewable..
     *
     * @return int|null
     */
    public function getViewableImpressions(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('viewableImpressions');

        return $value;
    }

    /**
     * Sets The number of impressions that were viewable..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setViewableImpressions(?int $value): self
    {
        $this->setAttribute('viewableImpressions', $value);

        return $this;
    }
}
