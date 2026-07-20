<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdRequest.
 */
final class QueryAdRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroupIdFilter' => [
            'type' => 'model',
            'class' => AdAdGroupIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adIdFilter' => [
            'type' => 'model',
            'class' => AdAdIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adProductFilter' => [
            'type' => 'model',
            'class' => AdAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'campaignIdFilter' => [
            'type' => 'model',
            'class' => AdCampaignIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceScopeFilter' => [
            'type' => 'model',
            'class' => AdMarketplaceScopeFilter::class,
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
        'nameFilter' => [
            'type' => 'model',
            'class' => AdNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => AdStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adGroupIdFilter value.
     *
     * @return AdAdGroupIdFilter|null
     */
    public function getAdGroupIdFilter(): ?AdAdGroupIdFilter
    {
        /** @var AdAdGroupIdFilter|null $value */
        $value = $this->getAttribute('adGroupIdFilter');

        return $value;
    }

    /**
     * Sets the adGroupIdFilter value.
     *
     * @param AdAdGroupIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroupIdFilter(AdAdGroupIdFilter|array|null $value): self
    {
        $this->setAttribute('adGroupIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adIdFilter value.
     *
     * @return AdAdIdFilter|null
     */
    public function getAdIdFilter(): ?AdAdIdFilter
    {
        /** @var AdAdIdFilter|null $value */
        $value = $this->getAttribute('adIdFilter');

        return $value;
    }

    /**
     * Sets the adIdFilter value.
     *
     * @param AdAdIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdIdFilter(AdAdIdFilter|array|null $value): self
    {
        $this->setAttribute('adIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adProductFilter value.
     *
     * @return AdAdProductFilter|null
     */
    public function getAdProductFilter(): ?AdAdProductFilter
    {
        /** @var AdAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param AdAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(AdAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the campaignIdFilter value.
     *
     * @return AdCampaignIdFilter|null
     */
    public function getCampaignIdFilter(): ?AdCampaignIdFilter
    {
        /** @var AdCampaignIdFilter|null $value */
        $value = $this->getAttribute('campaignIdFilter');

        return $value;
    }

    /**
     * Sets the campaignIdFilter value.
     *
     * @param AdCampaignIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCampaignIdFilter(AdCampaignIdFilter|array|null $value): self
    {
        $this->setAttribute('campaignIdFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceScopeFilter value.
     *
     * @return AdMarketplaceScopeFilter|null
     */
    public function getMarketplaceScopeFilter(): ?AdMarketplaceScopeFilter
    {
        /** @var AdMarketplaceScopeFilter|null $value */
        $value = $this->getAttribute('marketplaceScopeFilter');

        return $value;
    }

    /**
     * Sets the marketplaceScopeFilter value.
     *
     * @param AdMarketplaceScopeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceScopeFilter(AdMarketplaceScopeFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceScopeFilter', $value);

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
     * @return AdNameFilter|null
     */
    public function getNameFilter(): ?AdNameFilter
    {
        /** @var AdNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param AdNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(AdNameFilter|array|null $value): self
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
     * Returns the stateFilter value.
     *
     * @return AdStateFilter|null
     */
    public function getStateFilter(): ?AdStateFilter
    {
        /** @var AdStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param AdStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(AdStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }
}
