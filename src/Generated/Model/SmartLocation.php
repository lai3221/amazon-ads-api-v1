<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A smart location targets postal codes based on a sales index.
 *
 * @generated from Amazon Ads API v1 schema SmartLocation.
 */
final class SmartLocation extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SmartLocation';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'locationIndexId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'maxIndexValuePercentile' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 100,
        ],
        'minIndexValuePercentile' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 100,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The ID of the index used for this smart location..
     *
     * @return string|null
     */
    public function getLocationIndexId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('locationIndexId');

        return $value;
    }

    /**
     * Sets The ID of the index used for this smart location..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLocationIndexId(?string $value): self
    {
        $this->setAttribute('locationIndexId', $value);

        return $this;
    }

    /**
     * Returns Maximum percentile value (0-100). Must be greater than minIndexValuePercentile. Null will be treated as 0..
     *
     * @return int|null
     */
    public function getMaxIndexValuePercentile(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxIndexValuePercentile');

        return $value;
    }

    /**
     * Sets Maximum percentile value (0-100). Must be greater than minIndexValuePercentile. Null will be treated as 0..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxIndexValuePercentile(?int $value): self
    {
        $this->setAttribute('maxIndexValuePercentile', $value);

        return $this;
    }

    /**
     * Returns Minimum percentile value (0-100). Must be less than maxIndexValuePercentile. Null will be treated as 0..
     *
     * @return int|null
     */
    public function getMinIndexValuePercentile(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('minIndexValuePercentile');

        return $value;
    }

    /**
     * Sets Minimum percentile value (0-100). Must be less than maxIndexValuePercentile. Null will be treated as 0..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMinIndexValuePercentile(?int $value): self
    {
        $this->setAttribute('minIndexValuePercentile', $value);

        return $this;
    }

    /**
     * Returns Name for the smart location..
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
     * Sets Name for the smart location..
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
