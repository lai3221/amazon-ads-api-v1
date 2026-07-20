<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Schedule information for store edition.
 *
 * @generated from Amazon Ads API v1 schema StoreEditionSchedule.
 */
final class StoreEditionSchedule extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreEditionSchedule';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endAt' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'startAt' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns End time for the store edition..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndAt(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endAt');

        return $value;
    }

    /**
     * Sets End time for the store edition..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndAt(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endAt', $value);

        return $this;
    }

    /**
     * Returns Start time for the store edition..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartAt(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startAt');

        return $value;
    }

    /**
     * Sets Start time for the store edition..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartAt(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startAt', $value);

        return $this;
    }
}
