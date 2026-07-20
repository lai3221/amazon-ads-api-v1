<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateDatePeriod schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateDatePeriod.
 */
final class CreateDatePeriod extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDatePeriod';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endDate' => [
            'type' => 'datetime',
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
     * Returns the endDate value.
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
     * Sets the endDate value.
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
     * Returns the startDate value.
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
     * Sets the startDate value.
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
