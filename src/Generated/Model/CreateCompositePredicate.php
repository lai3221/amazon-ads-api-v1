<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCompositePredicate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCompositePredicate.
 */
final class CreateCompositePredicate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCompositePredicate';

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
                'class' => CreateFilter::class,
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
     * @return list<CreateFilter>|null
     */
    public function getFilters(): ?array
    {
        /** @var list<CreateFilter>|null $value */
        $value = $this->getAttribute('filters');

        return $value;
    }

    /**
     * Sets the filters value.
     *
     * @param list<CreateFilter>|null $value New property value.
     * @return $this
     */
    public function setFilters(?array $value): self
    {
        $this->setAttribute('filters', $value);

        return $this;
    }
}
