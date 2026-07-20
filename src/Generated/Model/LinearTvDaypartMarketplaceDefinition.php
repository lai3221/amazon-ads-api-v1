<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvDaypartMarketplaceDefinition schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartMarketplaceDefinition.
 */
final class LinearTvDaypartMarketplaceDefinition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartMarketplaceDefinition';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endDayOfWeek' => [
            'type' => 'enum',
            'class' => DayOfWeek::class,
            'required' => true,
            'nullable' => false,
        ],
        'endHourOfDay' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 23,
        ],
        'endMinuteOfDay' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 59,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'startDayOfWeek' => [
            'type' => 'enum',
            'class' => DayOfWeek::class,
            'required' => true,
            'nullable' => false,
        ],
        'startHourOfDay' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 23,
        ],
        'startMinuteOfDay' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 59,
        ],
    ];

    /**
     * Returns the endDayOfWeek value.
     *
     * @return DayOfWeek|null
     */
    public function getEndDayOfWeek(): ?DayOfWeek
    {
        /** @var DayOfWeek|null $value */
        $value = $this->getAttribute('endDayOfWeek');

        return $value;
    }

    /**
     * Sets the endDayOfWeek value.
     *
     * @param DayOfWeek|string|null $value New property value.
     * @return $this
     */
    public function setEndDayOfWeek(DayOfWeek|string|null $value): self
    {
        $this->setAttribute('endDayOfWeek', $value);

        return $this;
    }

    /**
     * Returns Hour of the end time (local time zone) targeted by the daypart..
     *
     * @return int|null
     */
    public function getEndHourOfDay(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('endHourOfDay');

        return $value;
    }

    /**
     * Sets Hour of the end time (local time zone) targeted by the daypart..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setEndHourOfDay(?int $value): self
    {
        $this->setAttribute('endHourOfDay', $value);

        return $this;
    }

    /**
     * Returns Minute of the end time (local time zone) targeted by the daypart..
     *
     * @return int|null
     */
    public function getEndMinuteOfDay(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('endMinuteOfDay');

        return $value;
    }

    /**
     * Sets Minute of the end time (local time zone) targeted by the daypart..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setEndMinuteOfDay(?int $value): self
    {
        $this->setAttribute('endMinuteOfDay', $value);

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
     * Returns the startDayOfWeek value.
     *
     * @return DayOfWeek|null
     */
    public function getStartDayOfWeek(): ?DayOfWeek
    {
        /** @var DayOfWeek|null $value */
        $value = $this->getAttribute('startDayOfWeek');

        return $value;
    }

    /**
     * Sets the startDayOfWeek value.
     *
     * @param DayOfWeek|string|null $value New property value.
     * @return $this
     */
    public function setStartDayOfWeek(DayOfWeek|string|null $value): self
    {
        $this->setAttribute('startDayOfWeek', $value);

        return $this;
    }

    /**
     * Returns Hour of the start time (local time zone) targeted by the daypart..
     *
     * @return int|null
     */
    public function getStartHourOfDay(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('startHourOfDay');

        return $value;
    }

    /**
     * Sets Hour of the start time (local time zone) targeted by the daypart..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setStartHourOfDay(?int $value): self
    {
        $this->setAttribute('startHourOfDay', $value);

        return $this;
    }

    /**
     * Returns Minute of the start time (local time zone) targeted by the daypart..
     *
     * @return int|null
     */
    public function getStartMinuteOfDay(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('startMinuteOfDay');

        return $value;
    }

    /**
     * Sets Minute of the start time (local time zone) targeted by the daypart..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setStartMinuteOfDay(?int $value): self
    {
        $this->setAttribute('startMinuteOfDay', $value);

        return $this;
    }
}
