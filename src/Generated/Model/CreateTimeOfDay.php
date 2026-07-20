<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTimeOfDay schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTimeOfDay.
 */
final class CreateTimeOfDay extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTimeOfDay';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endTime' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'startTime' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Selected end time..
     *
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('endTime');

        return $value;
    }

    /**
     * Sets Selected end time..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEndTime(?string $value): self
    {
        $this->setAttribute('endTime', $value);

        return $this;
    }

    /**
     * Returns Selected start time..
     *
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('startTime');

        return $value;
    }

    /**
     * Sets Selected start time..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStartTime(?string $value): self
    {
        $this->setAttribute('startTime', $value);

        return $this;
    }
}
