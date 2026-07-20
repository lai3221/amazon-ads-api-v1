<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QuerySupplierRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QuerySupplierRequest.
 */
final class QuerySupplierRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QuerySupplierRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'integrationTypeFilter' => [
            'type' => 'model',
            'class' => SupplierIntegrationTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'sort' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SupplierSortOption::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => SupplierSupplierStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'supplierIdFilter' => [
            'type' => 'model',
            'class' => SupplierSupplierIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'supplierNameFilter' => [
            'type' => 'model',
            'class' => SupplierSupplierNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'typeFilter' => [
            'type' => 'model',
            'class' => SupplierSupplierTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the integrationTypeFilter value.
     *
     * @return SupplierIntegrationTypeFilter|null
     */
    public function getIntegrationTypeFilter(): ?SupplierIntegrationTypeFilter
    {
        /** @var SupplierIntegrationTypeFilter|null $value */
        $value = $this->getAttribute('integrationTypeFilter');

        return $value;
    }

    /**
     * Sets the integrationTypeFilter value.
     *
     * @param SupplierIntegrationTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIntegrationTypeFilter(SupplierIntegrationTypeFilter|array|null $value): self
    {
        $this->setAttribute('integrationTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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

    /**
     * Returns the sort value.
     *
     * @return list<SupplierSortOption>|null
     */
    public function getSort(): ?array
    {
        /** @var list<SupplierSortOption>|null $value */
        $value = $this->getAttribute('sort');

        return $value;
    }

    /**
     * Sets the sort value.
     *
     * @param list<SupplierSortOption>|null $value New property value.
     * @return $this
     */
    public function setSort(?array $value): self
    {
        $this->setAttribute('sort', $value);

        return $this;
    }

    /**
     * Returns the stateFilter value.
     *
     * @return SupplierSupplierStateFilter|null
     */
    public function getStateFilter(): ?SupplierSupplierStateFilter
    {
        /** @var SupplierSupplierStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param SupplierSupplierStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(SupplierSupplierStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }

    /**
     * Returns the supplierIdFilter value.
     *
     * @return SupplierSupplierIdFilter|null
     */
    public function getSupplierIdFilter(): ?SupplierSupplierIdFilter
    {
        /** @var SupplierSupplierIdFilter|null $value */
        $value = $this->getAttribute('supplierIdFilter');

        return $value;
    }

    /**
     * Sets the supplierIdFilter value.
     *
     * @param SupplierSupplierIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSupplierIdFilter(SupplierSupplierIdFilter|array|null $value): self
    {
        $this->setAttribute('supplierIdFilter', $value);

        return $this;
    }

    /**
     * Returns the supplierNameFilter value.
     *
     * @return SupplierSupplierNameFilter|null
     */
    public function getSupplierNameFilter(): ?SupplierSupplierNameFilter
    {
        /** @var SupplierSupplierNameFilter|null $value */
        $value = $this->getAttribute('supplierNameFilter');

        return $value;
    }

    /**
     * Sets the supplierNameFilter value.
     *
     * @param SupplierSupplierNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSupplierNameFilter(SupplierSupplierNameFilter|array|null $value): self
    {
        $this->setAttribute('supplierNameFilter', $value);

        return $this;
    }

    /**
     * Returns the typeFilter value.
     *
     * @return SupplierSupplierTypeFilter|null
     */
    public function getTypeFilter(): ?SupplierSupplierTypeFilter
    {
        /** @var SupplierSupplierTypeFilter|null $value */
        $value = $this->getAttribute('typeFilter');

        return $value;
    }

    /**
     * Sets the typeFilter value.
     *
     * @param SupplierSupplierTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTypeFilter(SupplierSupplierTypeFilter|array|null $value): self
    {
        $this->setAttribute('typeFilter', $value);

        return $this;
    }
}
