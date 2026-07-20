<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdAssociationUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdAssociationUpdate.
 */
final class AdAssociationUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdAssociationUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adAssociationId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => UpdateState::class,
            'required' => false,
            'nullable' => false,
        ],
        'weight' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The unique identifier of the ad association..
     *
     * @return string|null
     */
    public function getAdAssociationId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('adAssociationId');

        return $value;
    }

    /**
     * Sets The unique identifier of the ad association..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdAssociationId(?string $value): self
    {
        $this->setAttribute('adAssociationId', $value);

        return $this;
    }

    /**
     * Returns The end date time for the ad association..
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
     * Sets The end date time for the ad association..
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
     * Returns The start date time for the ad association..
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
     * Sets The start date time for the ad association..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }

    /**
     * Returns the state value.
     *
     * @return UpdateState|null
     */
    public function getState(): ?UpdateState
    {
        /** @var UpdateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param UpdateState|string|null $value New property value.
     * @return $this
     */
    public function setState(UpdateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns The relative percentage of traffic which would be directed to the associated Ad Creative in the Ad Group..
     *
     * @return int|null
     */
    public function getWeight(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('weight');

        return $value;
    }

    /**
     * Sets The relative percentage of traffic which would be directed to the associated Ad Creative in the Ad Group..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setWeight(?int $value): self
    {
        $this->setAttribute('weight', $value);

        return $this;
    }
}
