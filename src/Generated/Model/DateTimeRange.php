<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A date-time range with optional inclusive min and max bounds.
 *
 * @generated from Amazon Ads API v1 schema DateTimeRange.
 */
final class DateTimeRange extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DateTimeRange';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'max' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'min' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The maximum (inclusive) date time of the range..
     *
     * @return \DateTimeImmutable|null
     */
    public function getMax(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('max');

        return $value;
    }

    /**
     * Sets The maximum (inclusive) date time of the range..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setMax(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('max', $value);

        return $this;
    }

    /**
     * Returns The minimum (inclusive) date time of the range..
     *
     * @return \DateTimeImmutable|null
     */
    public function getMin(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('min');

        return $value;
    }

    /**
     * Sets The minimum (inclusive) date time of the range..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setMin(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('min', $value);

        return $this;
    }
}
