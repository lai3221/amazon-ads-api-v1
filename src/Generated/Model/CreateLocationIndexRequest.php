<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateLocationIndexRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateLocationIndexRequest.
 */
final class CreateLocationIndexRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLocationIndexRequest';

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
                'class' => LocationIndexCreate::class,
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
     * @return list<LocationIndexCreate>|null
     */
    public function getLocationIndexes(): ?array
    {
        /** @var list<LocationIndexCreate>|null $value */
        $value = $this->getAttribute('locationIndexes');

        return $value;
    }

    /**
     * Sets the locationIndexes value.
     *
     * @param list<LocationIndexCreate>|null $value New property value.
     * @return $this
     */
    public function setLocationIndexes(?array $value): self
    {
        $this->setAttribute('locationIndexes', $value);

        return $this;
    }
}
