<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdvertisingDealRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdvertisingDealRequest.
 */
final class QueryAdvertisingDealRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdvertisingDealRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProductFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'advertisingDealIdFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealAdvertisingDealIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'countryCodeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealCountryCodeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'creationDateTimeRangeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealCreationDateTimeRangeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'dealTypeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealAdvertisingDealTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'endDateTimeRangeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealEndDateTimeRangeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'exchangeDealIdFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealExchangeDealIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'exchangeIdFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealExchangeIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceDealFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealMarketplaceDealFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 10000,
        ],
        'nameFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'priceRangeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealPriceRangeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'priceTypeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealAdvertisingDealPriceTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'sort' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertisingDealSortOption::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 8,
        ],
        'startDateTimeRangeFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealStartDateTimeRangeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'statusFilter' => [
            'type' => 'model',
            'class' => AdvertisingDealStatusFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProductFilter value.
     *
     * @return AdvertisingDealAdProductFilter|null
     */
    public function getAdProductFilter(): ?AdvertisingDealAdProductFilter
    {
        /** @var AdvertisingDealAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param AdvertisingDealAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(AdvertisingDealAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the advertisingDealIdFilter value.
     *
     * @return AdvertisingDealAdvertisingDealIdFilter|null
     */
    public function getAdvertisingDealIdFilter(): ?AdvertisingDealAdvertisingDealIdFilter
    {
        /** @var AdvertisingDealAdvertisingDealIdFilter|null $value */
        $value = $this->getAttribute('advertisingDealIdFilter');

        return $value;
    }

    /**
     * Sets the advertisingDealIdFilter value.
     *
     * @param AdvertisingDealAdvertisingDealIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDealIdFilter(AdvertisingDealAdvertisingDealIdFilter|array|null $value): self
    {
        $this->setAttribute('advertisingDealIdFilter', $value);

        return $this;
    }

    /**
     * Returns the countryCodeFilter value.
     *
     * @return AdvertisingDealCountryCodeFilter|null
     */
    public function getCountryCodeFilter(): ?AdvertisingDealCountryCodeFilter
    {
        /** @var AdvertisingDealCountryCodeFilter|null $value */
        $value = $this->getAttribute('countryCodeFilter');

        return $value;
    }

    /**
     * Sets the countryCodeFilter value.
     *
     * @param AdvertisingDealCountryCodeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCountryCodeFilter(AdvertisingDealCountryCodeFilter|array|null $value): self
    {
        $this->setAttribute('countryCodeFilter', $value);

        return $this;
    }

    /**
     * Returns the creationDateTimeRangeFilter value.
     *
     * @return AdvertisingDealCreationDateTimeRangeFilter|null
     */
    public function getCreationDateTimeRangeFilter(): ?AdvertisingDealCreationDateTimeRangeFilter
    {
        /** @var AdvertisingDealCreationDateTimeRangeFilter|null $value */
        $value = $this->getAttribute('creationDateTimeRangeFilter');

        return $value;
    }

    /**
     * Sets the creationDateTimeRangeFilter value.
     *
     * @param AdvertisingDealCreationDateTimeRangeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreationDateTimeRangeFilter(AdvertisingDealCreationDateTimeRangeFilter|array|null $value): self
    {
        $this->setAttribute('creationDateTimeRangeFilter', $value);

        return $this;
    }

    /**
     * Returns the dealTypeFilter value.
     *
     * @return AdvertisingDealAdvertisingDealTypeFilter|null
     */
    public function getDealTypeFilter(): ?AdvertisingDealAdvertisingDealTypeFilter
    {
        /** @var AdvertisingDealAdvertisingDealTypeFilter|null $value */
        $value = $this->getAttribute('dealTypeFilter');

        return $value;
    }

    /**
     * Sets the dealTypeFilter value.
     *
     * @param AdvertisingDealAdvertisingDealTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDealTypeFilter(AdvertisingDealAdvertisingDealTypeFilter|array|null $value): self
    {
        $this->setAttribute('dealTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the endDateTimeRangeFilter value.
     *
     * @return AdvertisingDealEndDateTimeRangeFilter|null
     */
    public function getEndDateTimeRangeFilter(): ?AdvertisingDealEndDateTimeRangeFilter
    {
        /** @var AdvertisingDealEndDateTimeRangeFilter|null $value */
        $value = $this->getAttribute('endDateTimeRangeFilter');

        return $value;
    }

    /**
     * Sets the endDateTimeRangeFilter value.
     *
     * @param AdvertisingDealEndDateTimeRangeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEndDateTimeRangeFilter(AdvertisingDealEndDateTimeRangeFilter|array|null $value): self
    {
        $this->setAttribute('endDateTimeRangeFilter', $value);

        return $this;
    }

    /**
     * Returns the exchangeDealIdFilter value.
     *
     * @return AdvertisingDealExchangeDealIdFilter|null
     */
    public function getExchangeDealIdFilter(): ?AdvertisingDealExchangeDealIdFilter
    {
        /** @var AdvertisingDealExchangeDealIdFilter|null $value */
        $value = $this->getAttribute('exchangeDealIdFilter');

        return $value;
    }

    /**
     * Sets the exchangeDealIdFilter value.
     *
     * @param AdvertisingDealExchangeDealIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setExchangeDealIdFilter(AdvertisingDealExchangeDealIdFilter|array|null $value): self
    {
        $this->setAttribute('exchangeDealIdFilter', $value);

        return $this;
    }

    /**
     * Returns the exchangeIdFilter value.
     *
     * @return AdvertisingDealExchangeIdFilter|null
     */
    public function getExchangeIdFilter(): ?AdvertisingDealExchangeIdFilter
    {
        /** @var AdvertisingDealExchangeIdFilter|null $value */
        $value = $this->getAttribute('exchangeIdFilter');

        return $value;
    }

    /**
     * Sets the exchangeIdFilter value.
     *
     * @param AdvertisingDealExchangeIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setExchangeIdFilter(AdvertisingDealExchangeIdFilter|array|null $value): self
    {
        $this->setAttribute('exchangeIdFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceDealFilter value.
     *
     * @return AdvertisingDealMarketplaceDealFilter|null
     */
    public function getMarketplaceDealFilter(): ?AdvertisingDealMarketplaceDealFilter
    {
        /** @var AdvertisingDealMarketplaceDealFilter|null $value */
        $value = $this->getAttribute('marketplaceDealFilter');

        return $value;
    }

    /**
     * Sets the marketplaceDealFilter value.
     *
     * @param AdvertisingDealMarketplaceDealFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceDealFilter(AdvertisingDealMarketplaceDealFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceDealFilter', $value);

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
     * Returns the nameFilter value.
     *
     * @return AdvertisingDealNameFilter|null
     */
    public function getNameFilter(): ?AdvertisingDealNameFilter
    {
        /** @var AdvertisingDealNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param AdvertisingDealNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(AdvertisingDealNameFilter|array|null $value): self
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
     * Returns the priceRangeFilter value.
     *
     * @return AdvertisingDealPriceRangeFilter|null
     */
    public function getPriceRangeFilter(): ?AdvertisingDealPriceRangeFilter
    {
        /** @var AdvertisingDealPriceRangeFilter|null $value */
        $value = $this->getAttribute('priceRangeFilter');

        return $value;
    }

    /**
     * Sets the priceRangeFilter value.
     *
     * @param AdvertisingDealPriceRangeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPriceRangeFilter(AdvertisingDealPriceRangeFilter|array|null $value): self
    {
        $this->setAttribute('priceRangeFilter', $value);

        return $this;
    }

    /**
     * Returns the priceTypeFilter value.
     *
     * @return AdvertisingDealAdvertisingDealPriceTypeFilter|null
     */
    public function getPriceTypeFilter(): ?AdvertisingDealAdvertisingDealPriceTypeFilter
    {
        /** @var AdvertisingDealAdvertisingDealPriceTypeFilter|null $value */
        $value = $this->getAttribute('priceTypeFilter');

        return $value;
    }

    /**
     * Sets the priceTypeFilter value.
     *
     * @param AdvertisingDealAdvertisingDealPriceTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPriceTypeFilter(AdvertisingDealAdvertisingDealPriceTypeFilter|array|null $value): self
    {
        $this->setAttribute('priceTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the sort value.
     *
     * @return list<AdvertisingDealSortOption>|null
     */
    public function getSort(): ?array
    {
        /** @var list<AdvertisingDealSortOption>|null $value */
        $value = $this->getAttribute('sort');

        return $value;
    }

    /**
     * Sets the sort value.
     *
     * @param list<AdvertisingDealSortOption>|null $value New property value.
     * @return $this
     */
    public function setSort(?array $value): self
    {
        $this->setAttribute('sort', $value);

        return $this;
    }

    /**
     * Returns the startDateTimeRangeFilter value.
     *
     * @return AdvertisingDealStartDateTimeRangeFilter|null
     */
    public function getStartDateTimeRangeFilter(): ?AdvertisingDealStartDateTimeRangeFilter
    {
        /** @var AdvertisingDealStartDateTimeRangeFilter|null $value */
        $value = $this->getAttribute('startDateTimeRangeFilter');

        return $value;
    }

    /**
     * Sets the startDateTimeRangeFilter value.
     *
     * @param AdvertisingDealStartDateTimeRangeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStartDateTimeRangeFilter(AdvertisingDealStartDateTimeRangeFilter|array|null $value): self
    {
        $this->setAttribute('startDateTimeRangeFilter', $value);

        return $this;
    }

    /**
     * Returns the statusFilter value.
     *
     * @return AdvertisingDealStatusFilter|null
     */
    public function getStatusFilter(): ?AdvertisingDealStatusFilter
    {
        /** @var AdvertisingDealStatusFilter|null $value */
        $value = $this->getAttribute('statusFilter');

        return $value;
    }

    /**
     * Sets the statusFilter value.
     *
     * @param AdvertisingDealStatusFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatusFilter(AdvertisingDealStatusFilter|array|null $value): self
    {
        $this->setAttribute('statusFilter', $value);

        return $this;
    }
}
