<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealPlanningMetrics schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealPlanningMetrics.
 */
final class DealPlanningMetrics extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealPlanningMetrics';

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
        'clickThroughRate' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'currency' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'dealPlanningMetricsId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'effectiveCPM' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'measuredRate' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'videoCompletionRate' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'viewRate' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'viewableCPM' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
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
     * Returns Rate of delivered ad impressions that users clicked on..
     *
     * @return int|float|null
     */
    public function getClickThroughRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('clickThroughRate');

        return $value;
    }

    /**
     * Sets Rate of delivered ad impressions that users clicked on..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setClickThroughRate(int|float|null $value): self
    {
        $this->setAttribute('clickThroughRate', $value);

        return $this;
    }

    /**
     * Returns the currency value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrency(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currency');

        return $value;
    }

    /**
     * Sets the currency value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrency(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currency', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the planning metrics record..
     *
     * @return string|null
     */
    public function getDealPlanningMetricsId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dealPlanningMetricsId');

        return $value;
    }

    /**
     * Sets A unique identifier for the planning metrics record..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDealPlanningMetricsId(?string $value): self
    {
        $this->setAttribute('dealPlanningMetricsId', $value);

        return $this;
    }

    /**
     * Returns Effective CPM actually cleared for impressions..
     *
     * @return int|float|null
     */
    public function getEffectiveCPM(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('effectiveCPM');

        return $value;
    }

    /**
     * Sets Effective CPM actually cleared for impressions..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setEffectiveCPM(int|float|null $value): self
    {
        $this->setAttribute('effectiveCPM', $value);

        return $this;
    }

    /**
     * Returns Rate of impressions that were measurable for viewability..
     *
     * @return int|float|null
     */
    public function getMeasuredRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('measuredRate');

        return $value;
    }

    /**
     * Sets Rate of impressions that were measurable for viewability..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setMeasuredRate(int|float|null $value): self
    {
        $this->setAttribute('measuredRate', $value);

        return $this;
    }

    /**
     * Returns Rate of video ad views that were viewed to completion (video end)..
     *
     * @return int|float|null
     */
    public function getVideoCompletionRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('videoCompletionRate');

        return $value;
    }

    /**
     * Sets Rate of video ad views that were viewed to completion (video end)..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setVideoCompletionRate(int|float|null $value): self
    {
        $this->setAttribute('videoCompletionRate', $value);

        return $this;
    }

    /**
     * Returns Rate of ad impressions that were measured as viewable..
     *
     * @return int|float|null
     */
    public function getViewRate(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('viewRate');

        return $value;
    }

    /**
     * Sets Rate of ad impressions that were measured as viewable..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setViewRate(int|float|null $value): self
    {
        $this->setAttribute('viewRate', $value);

        return $this;
    }

    /**
     * Returns Average CPM actually cleared for impressions that were deemed in view..
     *
     * @return int|float|null
     */
    public function getViewableCPM(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('viewableCPM');

        return $value;
    }

    /**
     * Sets Average CPM actually cleared for impressions that were deemed in view..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setViewableCPM(int|float|null $value): self
    {
        $this->setAttribute('viewableCPM', $value);

        return $this;
    }
}
