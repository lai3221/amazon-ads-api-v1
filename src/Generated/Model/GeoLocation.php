<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the GeoLocation schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema GeoLocation.
 */
final class GeoLocation extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GeoLocation';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'geoLocationId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'location' => [
            'type' => 'model',
            'class' => GeoLocationUnion::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The identifier of the geo location..
     *
     * @return string|null
     */
    public function getGeoLocationId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('geoLocationId');

        return $value;
    }

    /**
     * Sets The identifier of the geo location..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGeoLocationId(?string $value): self
    {
        $this->setAttribute('geoLocationId', $value);

        return $this;
    }

    /**
     * Returns the location value.
     *
     * @return GeoLocationUnion|null
     */
    public function getLocation(): ?GeoLocationUnion
    {
        /** @var GeoLocationUnion|null $value */
        $value = $this->getAttribute('location');

        return $value;
    }

    /**
     * Sets the location value.
     *
     * @param GeoLocationUnion|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLocation(GeoLocationUnion|array|null $value): self
    {
        $this->setAttribute('location', $value);

        return $this;
    }
}
