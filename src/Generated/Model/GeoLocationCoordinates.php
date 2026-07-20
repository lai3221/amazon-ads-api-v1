<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Coordinates for a point of interest.
 *
 * @generated from Amazon Ads API v1 schema GeoLocationCoordinates.
 */
final class GeoLocationCoordinates extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GeoLocationCoordinates';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'latitude' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'longitude' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Latitude coordinate. Example 47.6157..
     *
     * @return int|float|null
     */
    public function getLatitude(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('latitude');

        return $value;
    }

    /**
     * Sets Latitude coordinate. Example 47.6157..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLatitude(int|float|null $value): self
    {
        $this->setAttribute('latitude', $value);

        return $this;
    }

    /**
     * Returns Longitude coordinate. Example 122.339..
     *
     * @return int|float|null
     */
    public function getLongitude(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('longitude');

        return $value;
    }

    /**
     * Sets Longitude coordinate. Example 122.339..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLongitude(int|float|null $value): self
    {
        $this->setAttribute('longitude', $value);

        return $this;
    }
}
