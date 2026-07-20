<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on time of day.
 *
 * @generated from Amazon Ads API v1 schema CreateDayPartTarget.
 */
final class CreateDayPartTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDayPartTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dayOfWeek' => [
            'type' => 'enum',
            'class' => DayOfWeek::class,
            'required' => true,
            'nullable' => false,
        ],
        'timeOfDay' => [
            'type' => 'model',
            'class' => CreateTimeOfDay::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the dayOfWeek value.
     *
     * @return DayOfWeek|null
     */
    public function getDayOfWeek(): ?DayOfWeek
    {
        /** @var DayOfWeek|null $value */
        $value = $this->getAttribute('dayOfWeek');

        return $value;
    }

    /**
     * Sets the dayOfWeek value.
     *
     * @param DayOfWeek|string|null $value New property value.
     * @return $this
     */
    public function setDayOfWeek(DayOfWeek|string|null $value): self
    {
        $this->setAttribute('dayOfWeek', $value);

        return $this;
    }

    /**
     * Returns the timeOfDay value.
     *
     * @return CreateTimeOfDay|null
     */
    public function getTimeOfDay(): ?CreateTimeOfDay
    {
        /** @var CreateTimeOfDay|null $value */
        $value = $this->getAttribute('timeOfDay');

        return $value;
    }

    /**
     * Sets the timeOfDay value.
     *
     * @param CreateTimeOfDay|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTimeOfDay(CreateTimeOfDay|array|null $value): self
    {
        $this->setAttribute('timeOfDay', $value);

        return $this;
    }
}
