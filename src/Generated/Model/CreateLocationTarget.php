<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on geographic location.
 *
 * @generated from Amazon Ads API v1 schema CreateLocationTarget.
 */
final class CreateLocationTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLocationTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'locationId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'locationIdResolved' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The ID of the geographic location to target..
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('locationId');

        return $value;
    }

    /**
     * Sets The ID of the geographic location to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLocationId(?string $value): self
    {
        $this->setAttribute('locationId', $value);

        return $this;
    }

    /**
     * Returns A human-readable location text. It's a read-only field..
     *
     * @return string|null
     */
    public function getLocationIdResolved(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('locationIdResolved');

        return $value;
    }

    /**
     * Sets A human-readable location text. It's a read-only field..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLocationIdResolved(?string $value): self
    {
        $this->setAttribute('locationIdResolved', $value);

        return $this;
    }
}
