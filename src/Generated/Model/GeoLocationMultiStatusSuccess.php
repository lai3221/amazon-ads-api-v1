<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the GeoLocationMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema GeoLocationMultiStatusSuccess.
 */
final class GeoLocationMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GeoLocationMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'geoLocation' => [
            'type' => 'model',
            'class' => GeoLocation::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 99,
        ],
    ];

    /**
     * Returns the geoLocation value.
     *
     * @return GeoLocation|null
     */
    public function getGeoLocation(): ?GeoLocation
    {
        /** @var GeoLocation|null $value */
        $value = $this->getAttribute('geoLocation');

        return $value;
    }

    /**
     * Sets the geoLocation value.
     *
     * @param GeoLocation|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGeoLocation(GeoLocation|array|null $value): self
    {
        $this->setAttribute('geoLocation', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
