<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ReportingQuery schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ReportingQuery.
 */
final class ReportingQuery extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportingQuery';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'fields' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
        'filter' => [
            'type' => 'model',
            'class' => Filter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the fields value.
     *
     * @return list<string>|null
     */
    public function getFields(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('fields');

        return $value;
    }

    /**
     * Sets the fields value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setFields(?array $value): self
    {
        $this->setAttribute('fields', $value);

        return $this;
    }

    /**
     * Returns the filter value.
     *
     * @return Filter|null
     */
    public function getFilter(): ?Filter
    {
        /** @var Filter|null $value */
        $value = $this->getAttribute('filter');

        return $value;
    }

    /**
     * Sets the filter value.
     *
     * @param Filter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setFilter(Filter|array|null $value): self
    {
        $this->setAttribute('filter', $value);

        return $this;
    }
}
