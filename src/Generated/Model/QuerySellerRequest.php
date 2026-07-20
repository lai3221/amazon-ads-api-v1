<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QuerySellerRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QuerySellerRequest.
 */
final class QuerySellerRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QuerySellerRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 100,
        ],
        'nameFilter' => [
            'type' => 'model',
            'class' => SellerNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'sellerIdFilter' => [
            'type' => 'model',
            'class' => SellerSellerIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'sellerParentIdFilter' => [
            'type' => 'model',
            'class' => SellerSellerParentIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'sort' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SellerSortOption::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
    ];

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
     * Returns the nameFilter value.
     *
     * @return SellerNameFilter|null
     */
    public function getNameFilter(): ?SellerNameFilter
    {
        /** @var SellerNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param SellerNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(SellerNameFilter|array|null $value): self
    {
        $this->setAttribute('nameFilter', $value);

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
     * Returns the sellerIdFilter value.
     *
     * @return SellerSellerIdFilter|null
     */
    public function getSellerIdFilter(): ?SellerSellerIdFilter
    {
        /** @var SellerSellerIdFilter|null $value */
        $value = $this->getAttribute('sellerIdFilter');

        return $value;
    }

    /**
     * Sets the sellerIdFilter value.
     *
     * @param SellerSellerIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSellerIdFilter(SellerSellerIdFilter|array|null $value): self
    {
        $this->setAttribute('sellerIdFilter', $value);

        return $this;
    }

    /**
     * Returns the sellerParentIdFilter value.
     *
     * @return SellerSellerParentIdFilter|null
     */
    public function getSellerParentIdFilter(): ?SellerSellerParentIdFilter
    {
        /** @var SellerSellerParentIdFilter|null $value */
        $value = $this->getAttribute('sellerParentIdFilter');

        return $value;
    }

    /**
     * Sets the sellerParentIdFilter value.
     *
     * @param SellerSellerParentIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSellerParentIdFilter(SellerSellerParentIdFilter|array|null $value): self
    {
        $this->setAttribute('sellerParentIdFilter', $value);

        return $this;
    }

    /**
     * Returns the sort value.
     *
     * @return list<SellerSortOption>|null
     */
    public function getSort(): ?array
    {
        /** @var list<SellerSortOption>|null $value */
        $value = $this->getAttribute('sort');

        return $value;
    }

    /**
     * Sets the sort value.
     *
     * @param list<SellerSortOption>|null $value New property value.
     * @return $this
     */
    public function setSort(?array $value): self
    {
        $this->setAttribute('sort', $value);

        return $this;
    }
}
