<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The composite key that uniquely identifies an event.
 *
 * @generated from Amazon Ads API v1 schema CreateEventDescription.
 */
final class CreateEventDescription extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateEventDescription';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'conversionType' => [
            'type' => 'enum',
            'class' => ConversionType::class,
            'required' => true,
            'nullable' => false,
        ],
        'dataSetName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'eventIngestionMethod' => [
            'type' => 'enum',
            'class' => EventIngestionMethod::class,
            'required' => true,
            'nullable' => false,
        ],
        'eventSource' => [
            'type' => 'enum',
            'class' => EventSource::class,
            'required' => true,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the conversionType value.
     *
     * @return ConversionType|null
     */
    public function getConversionType(): ?ConversionType
    {
        /** @var ConversionType|null $value */
        $value = $this->getAttribute('conversionType');

        return $value;
    }

    /**
     * Sets the conversionType value.
     *
     * @param ConversionType|string|null $value New property value.
     * @return $this
     */
    public function setConversionType(ConversionType|string|null $value): self
    {
        $this->setAttribute('conversionType', $value);

        return $this;
    }

    /**
     * Returns Event DataSet name to which this event should be added to..
     *
     * @return string|null
     */
    public function getDataSetName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dataSetName');

        return $value;
    }

    /**
     * Sets Event DataSet name to which this event should be added to..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDataSetName(?string $value): self
    {
        $this->setAttribute('dataSetName', $value);

        return $this;
    }

    /**
     * Returns the eventIngestionMethod value.
     *
     * @return EventIngestionMethod|null
     */
    public function getEventIngestionMethod(): ?EventIngestionMethod
    {
        /** @var EventIngestionMethod|null $value */
        $value = $this->getAttribute('eventIngestionMethod');

        return $value;
    }

    /**
     * Sets the eventIngestionMethod value.
     *
     * @param EventIngestionMethod|string|null $value New property value.
     * @return $this
     */
    public function setEventIngestionMethod(EventIngestionMethod|string|null $value): self
    {
        $this->setAttribute('eventIngestionMethod', $value);

        return $this;
    }

    /**
     * Returns the eventSource value.
     *
     * @return EventSource|null
     */
    public function getEventSource(): ?EventSource
    {
        /** @var EventSource|null $value */
        $value = $this->getAttribute('eventSource');

        return $value;
    }

    /**
     * Sets the eventSource value.
     *
     * @param EventSource|string|null $value New property value.
     * @return $this
     */
    public function setEventSource(EventSource|string|null $value): self
    {
        $this->setAttribute('eventSource', $value);

        return $this;
    }

    /**
     * Returns The name of the imported event..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets The name of the imported event..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }
}
