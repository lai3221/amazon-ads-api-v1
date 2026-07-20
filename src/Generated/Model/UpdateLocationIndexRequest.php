<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateLocationIndexRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateLocationIndexRequest.
 */
final class UpdateLocationIndexRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateLocationIndexRequest';

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
                'class' => LocationIndexUpdate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the locationIndexes value.
     *
     * @return list<LocationIndexUpdate>|null
     */
    public function getLocationIndexes(): ?array
    {
        /** @var list<LocationIndexUpdate>|null $value */
        $value = $this->getAttribute('locationIndexes');

        return $value;
    }

    /**
     * Sets the locationIndexes value.
     *
     * @param list<LocationIndexUpdate>|null $value New property value.
     * @return $this
     */
    public function setLocationIndexes(?array $value): self
    {
        $this->setAttribute('locationIndexes', $value);

        return $this;
    }
}
