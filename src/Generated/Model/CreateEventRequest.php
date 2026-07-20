<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateEventRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateEventRequest.
 */
final class CreateEventRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateEventRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'events' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => EventCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 500,
        ],
    ];

    /**
     * Returns the events value.
     *
     * @return list<EventCreate>|null
     */
    public function getEvents(): ?array
    {
        /** @var list<EventCreate>|null $value */
        $value = $this->getAttribute('events');

        return $value;
    }

    /**
     * Sets the events value.
     *
     * @param list<EventCreate>|null $value New property value.
     * @return $this
     */
    public function setEvents(?array $value): self
    {
        $this->setAttribute('events', $value);

        return $this;
    }
}
