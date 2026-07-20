<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Configuration for a radius-based location. A minimum radius of 0.37 miles (2000 ft, 0.6km) is required.
 *
 * @generated from Amazon Ads API v1 schema CreateRadiusLocation.
 */
final class CreateRadiusLocation extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateRadiusLocation';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'coordinates' => [
            'type' => 'model',
            'class' => CreateGeoLocationCoordinates::class,
            'required' => false,
            'nullable' => false,
        ],
        'pointOfInterestAddress' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'pointOfInterestRadius' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'units' => [
            'type' => 'enum',
            'class' => DistanceUnit::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the coordinates value.
     *
     * @return CreateGeoLocationCoordinates|null
     */
    public function getCoordinates(): ?CreateGeoLocationCoordinates
    {
        /** @var CreateGeoLocationCoordinates|null $value */
        $value = $this->getAttribute('coordinates');

        return $value;
    }

    /**
     * Sets the coordinates value.
     *
     * @param CreateGeoLocationCoordinates|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCoordinates(CreateGeoLocationCoordinates|array|null $value): self
    {
        $this->setAttribute('coordinates', $value);

        return $this;
    }

    /**
     * Returns Address. Example '2111 7th Ave, Seattle, WA 98121, United States' or 'Amazon Spheres'..
     *
     * @return string|null
     */
    public function getPointOfInterestAddress(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pointOfInterestAddress');

        return $value;
    }

    /**
     * Sets Address. Example '2111 7th Ave, Seattle, WA 98121, United States' or 'Amazon Spheres'..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPointOfInterestAddress(?string $value): self
    {
        $this->setAttribute('pointOfInterestAddress', $value);

        return $this;
    }

    /**
     * Returns Radius of circle in kilometers or miles..
     *
     * @return int|float|null
     */
    public function getPointOfInterestRadius(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('pointOfInterestRadius');

        return $value;
    }

    /**
     * Sets Radius of circle in kilometers or miles..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setPointOfInterestRadius(int|float|null $value): self
    {
        $this->setAttribute('pointOfInterestRadius', $value);

        return $this;
    }

    /**
     * Returns the units value.
     *
     * @return DistanceUnit|null
     */
    public function getUnits(): ?DistanceUnit
    {
        /** @var DistanceUnit|null $value */
        $value = $this->getAttribute('units');

        return $value;
    }

    /**
     * Sets the units value.
     *
     * @param DistanceUnit|string|null $value New property value.
     * @return $this
     */
    public function setUnits(DistanceUnit|string|null $value): self
    {
        $this->setAttribute('units', $value);

        return $this;
    }
}
