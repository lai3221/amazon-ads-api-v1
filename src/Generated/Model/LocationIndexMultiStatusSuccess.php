<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LocationIndexMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LocationIndexMultiStatusSuccess.
 */
final class LocationIndexMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationIndexMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9,
        ],
        'locationIndex' => [
            'type' => 'model',
            'class' => LocationIndex::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the locationIndex value.
     *
     * @return LocationIndex|null
     */
    public function getLocationIndex(): ?LocationIndex
    {
        /** @var LocationIndex|null $value */
        $value = $this->getAttribute('locationIndex');

        return $value;
    }

    /**
     * Sets the locationIndex value.
     *
     * @param LocationIndex|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLocationIndex(LocationIndex|array|null $value): self
    {
        $this->setAttribute('locationIndex', $value);

        return $this;
    }
}
