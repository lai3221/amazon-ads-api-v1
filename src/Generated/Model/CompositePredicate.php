<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CompositePredicate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CompositePredicate.
 */
final class CompositePredicate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CompositePredicate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'filters' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Filter::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the filters value.
     *
     * @return list<Filter>|null
     */
    public function getFilters(): ?array
    {
        /** @var list<Filter>|null $value */
        $value = $this->getAttribute('filters');

        return $value;
    }

    /**
     * Sets the filters value.
     *
     * @param list<Filter>|null $value New property value.
     * @return $this
     */
    public function setFilters(?array $value): self
    {
        $this->setAttribute('filters', $value);

        return $this;
    }
}
