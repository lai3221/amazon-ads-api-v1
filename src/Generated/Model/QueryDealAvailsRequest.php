<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryDealAvailsRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryDealAvailsRequest.
 */
final class QueryDealAvailsRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryDealAvailsRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProductFilter' => [
            'type' => 'model',
            'class' => DealAvailsAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'advertisingDealIdFilter' => [
            'type' => 'model',
            'class' => DealAvailsAdvertisingDealIdFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'eligibleAvailsTargetingFilter' => [
            'type' => 'model',
            'class' => DealAvailsEligibleAvailsTargetingFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'groupByAttributesFilter' => [
            'type' => 'model',
            'class' => DealAvailsDealAvailsAttributeFieldFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 1000,
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
                'class' => DealAvailsSortOption::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns the adProductFilter value.
     *
     * @return DealAvailsAdProductFilter|null
     */
    public function getAdProductFilter(): ?DealAvailsAdProductFilter
    {
        /** @var DealAvailsAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param DealAvailsAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(DealAvailsAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the advertisingDealIdFilter value.
     *
     * @return DealAvailsAdvertisingDealIdFilter|null
     */
    public function getAdvertisingDealIdFilter(): ?DealAvailsAdvertisingDealIdFilter
    {
        /** @var DealAvailsAdvertisingDealIdFilter|null $value */
        $value = $this->getAttribute('advertisingDealIdFilter');

        return $value;
    }

    /**
     * Sets the advertisingDealIdFilter value.
     *
     * @param DealAvailsAdvertisingDealIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDealIdFilter(DealAvailsAdvertisingDealIdFilter|array|null $value): self
    {
        $this->setAttribute('advertisingDealIdFilter', $value);

        return $this;
    }

    /**
     * Returns the eligibleAvailsTargetingFilter value.
     *
     * @return DealAvailsEligibleAvailsTargetingFilter|null
     */
    public function getEligibleAvailsTargetingFilter(): ?DealAvailsEligibleAvailsTargetingFilter
    {
        /** @var DealAvailsEligibleAvailsTargetingFilter|null $value */
        $value = $this->getAttribute('eligibleAvailsTargetingFilter');

        return $value;
    }

    /**
     * Sets the eligibleAvailsTargetingFilter value.
     *
     * @param DealAvailsEligibleAvailsTargetingFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEligibleAvailsTargetingFilter(DealAvailsEligibleAvailsTargetingFilter|array|null $value): self
    {
        $this->setAttribute('eligibleAvailsTargetingFilter', $value);

        return $this;
    }

    /**
     * Returns the groupByAttributesFilter value.
     *
     * @return DealAvailsDealAvailsAttributeFieldFilter|null
     */
    public function getGroupByAttributesFilter(): ?DealAvailsDealAvailsAttributeFieldFilter
    {
        /** @var DealAvailsDealAvailsAttributeFieldFilter|null $value */
        $value = $this->getAttribute('groupByAttributesFilter');

        return $value;
    }

    /**
     * Sets the groupByAttributesFilter value.
     *
     * @param DealAvailsDealAvailsAttributeFieldFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGroupByAttributesFilter(DealAvailsDealAvailsAttributeFieldFilter|array|null $value): self
    {
        $this->setAttribute('groupByAttributesFilter', $value);

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
     * @return list<DealAvailsSortOption>|null
     */
    public function getSort(): ?array
    {
        /** @var list<DealAvailsSortOption>|null $value */
        $value = $this->getAttribute('sort');

        return $value;
    }

    /**
     * Sets the sort value.
     *
     * @param list<DealAvailsSortOption>|null $value New property value.
     * @return $this
     */
    public function setSort(?array $value): self
    {
        $this->setAttribute('sort', $value);

        return $this;
    }
}
