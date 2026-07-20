<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LocationIndexSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LocationIndexSuccessResponse.
 */
final class LocationIndexSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationIndexSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'locationIndexes' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LocationIndex::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the locationIndexes value.
     *
     * @return list<LocationIndex>|null
     */
    public function getLocationIndexes(): ?array
    {
        /** @var list<LocationIndex>|null $value */
        $value = $this->getAttribute('locationIndexes');

        return $value;
    }

    /**
     * Sets the locationIndexes value.
     *
     * @param list<LocationIndex>|null $value New property value.
     * @return $this
     */
    public function setLocationIndexes(?array $value): self
    {
        $this->setAttribute('locationIndexes', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
