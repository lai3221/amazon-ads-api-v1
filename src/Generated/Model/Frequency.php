<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Frequency schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Frequency.
 */
final class Frequency extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Frequency';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'eventMaxCount' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 99000,
        ],
        'frequencyTargetingSetting' => [
            'type' => 'enum',
            'class' => FrequencyTargetingSetting::class,
            'required' => true,
            'nullable' => false,
        ],
        'timeCount' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 60,
        ],
        'timeUnit' => [
            'type' => 'enum',
            'class' => TimeUnit::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The maximum number of times an EventType is served per user. For ADSP ad group, maximum supported value is 500..
     *
     * @return int|null
     */
    public function getEventMaxCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('eventMaxCount');

        return $value;
    }

    /**
     * Sets The maximum number of times an EventType is served per user. For ADSP ad group, maximum supported value is 500..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setEventMaxCount(?int $value): self
    {
        $this->setAttribute('eventMaxCount', $value);

        return $this;
    }

    /**
     * Returns the frequencyTargetingSetting value.
     *
     * @return FrequencyTargetingSetting|null
     */
    public function getFrequencyTargetingSetting(): ?FrequencyTargetingSetting
    {
        /** @var FrequencyTargetingSetting|null $value */
        $value = $this->getAttribute('frequencyTargetingSetting');

        return $value;
    }

    /**
     * Sets the frequencyTargetingSetting value.
     *
     * @param FrequencyTargetingSetting|string|null $value New property value.
     * @return $this
     */
    public function setFrequencyTargetingSetting(FrequencyTargetingSetting|string|null $value): self
    {
        $this->setAttribute('frequencyTargetingSetting', $value);

        return $this;
    }

    /**
     * Returns The value associated with the time and unit of time for this frequency cap..
     *
     * @return int|null
     */
    public function getTimeCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('timeCount');

        return $value;
    }

    /**
     * Sets The value associated with the time and unit of time for this frequency cap..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTimeCount(?int $value): self
    {
        $this->setAttribute('timeCount', $value);

        return $this;
    }

    /**
     * Returns the timeUnit value.
     *
     * @return TimeUnit|null
     */
    public function getTimeUnit(): ?TimeUnit
    {
        /** @var TimeUnit|null $value */
        $value = $this->getAttribute('timeUnit');

        return $value;
    }

    /**
     * Sets the timeUnit value.
     *
     * @param TimeUnit|string|null $value New property value.
     * @return $this
     */
    public function setTimeUnit(TimeUnit|string|null $value): self
    {
        $this->setAttribute('timeUnit', $value);

        return $this;
    }
}
