<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateGeoLocationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateGeoLocationRequest.
 */
final class CreateGeoLocationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateGeoLocationRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'geoLocations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => GeoLocationCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns the geoLocations value.
     *
     * @return list<GeoLocationCreate>|null
     */
    public function getGeoLocations(): ?array
    {
        /** @var list<GeoLocationCreate>|null $value */
        $value = $this->getAttribute('geoLocations');

        return $value;
    }

    /**
     * Sets the geoLocations value.
     *
     * @param list<GeoLocationCreate>|null $value New property value.
     * @return $this
     */
    public function setGeoLocations(?array $value): self
    {
        $this->setAttribute('geoLocations', $value);

        return $this;
    }
}
