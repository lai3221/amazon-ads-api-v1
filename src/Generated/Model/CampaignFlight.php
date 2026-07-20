<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignFlight schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignFlight.
 */
final class CampaignFlight extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignFlight';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'budget' => [
            'type' => 'model',
            'class' => FlightBudget::class,
            'required' => true,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'flightId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the budget value.
     *
     * @return FlightBudget|null
     */
    public function getBudget(): ?FlightBudget
    {
        /** @var FlightBudget|null $value */
        $value = $this->getAttribute('budget');

        return $value;
    }

    /**
     * Sets the budget value.
     *
     * @param FlightBudget|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBudget(FlightBudget|array|null $value): self
    {
        $this->setAttribute('budget', $value);

        return $this;
    }

    /**
     * Returns The end date of the flight..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDateTime');

        return $value;
    }

    /**
     * Sets The end date of the flight..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDateTime', $value);

        return $this;
    }

    /**
     * Returns The ID associated with the flight..
     *
     * @return string|null
     */
    public function getFlightId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('flightId');

        return $value;
    }

    /**
     * Sets The ID associated with the flight..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFlightId(?string $value): self
    {
        $this->setAttribute('flightId', $value);

        return $this;
    }

    /**
     * Returns The name of the flight..
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
     * Sets The name of the flight..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns The start date of the flight..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDateTime');

        return $value;
    }

    /**
     * Sets The start date of the flight..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }
}
