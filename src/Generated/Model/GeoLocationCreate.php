<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the GeoLocationCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema GeoLocationCreate.
 */
final class GeoLocationCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GeoLocationCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'location' => [
            'type' => 'model',
            'class' => CreateGeoLocationUnion::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the location value.
     *
     * @return CreateGeoLocationUnion|null
     */
    public function getLocation(): ?CreateGeoLocationUnion
    {
        /** @var CreateGeoLocationUnion|null $value */
        $value = $this->getAttribute('location');

        return $value;
    }

    /**
     * Sets the location value.
     *
     * @param CreateGeoLocationUnion|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLocation(CreateGeoLocationUnion|array|null $value): self
    {
        $this->setAttribute('location', $value);

        return $this;
    }
}
