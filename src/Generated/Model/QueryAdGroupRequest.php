<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdGroupRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdGroupRequest.
 */
final class QueryAdGroupRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdGroupRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroupIdFilter' => [
            'type' => 'model',
            'class' => AdGroupAdGroupIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adProductFilter' => [
            'type' => 'model',
            'class' => AdGroupAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'campaignIdFilter' => [
            'type' => 'model',
            'class' => AdGroupCampaignIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceScopeFilter' => [
            'type' => 'model',
            'class' => AdGroupMarketplaceScopeFilter::class,
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
            'class' => AdGroupNameFilter::class,
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
            'class' => AdGroupStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adGroupIdFilter value.
     *
     * @return AdGroupAdGroupIdFilter|null
     */
    public function getAdGroupIdFilter(): ?AdGroupAdGroupIdFilter
    {
        /** @var AdGroupAdGroupIdFilter|null $value */
        $value = $this->getAttribute('adGroupIdFilter');

        return $value;
    }

    /**
     * Sets the adGroupIdFilter value.
     *
     * @param AdGroupAdGroupIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroupIdFilter(AdGroupAdGroupIdFilter|array|null $value): self
    {
        $this->setAttribute('adGroupIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adProductFilter value.
     *
     * @return AdGroupAdProductFilter|null
     */
    public function getAdProductFilter(): ?AdGroupAdProductFilter
    {
        /** @var AdGroupAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param AdGroupAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(AdGroupAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the campaignIdFilter value.
     *
     * @return AdGroupCampaignIdFilter|null
     */
    public function getCampaignIdFilter(): ?AdGroupCampaignIdFilter
    {
        /** @var AdGroupCampaignIdFilter|null $value */
        $value = $this->getAttribute('campaignIdFilter');

        return $value;
    }

    /**
     * Sets the campaignIdFilter value.
     *
     * @param AdGroupCampaignIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCampaignIdFilter(AdGroupCampaignIdFilter|array|null $value): self
    {
        $this->setAttribute('campaignIdFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceScopeFilter value.
     *
     * @return AdGroupMarketplaceScopeFilter|null
     */
    public function getMarketplaceScopeFilter(): ?AdGroupMarketplaceScopeFilter
    {
        /** @var AdGroupMarketplaceScopeFilter|null $value */
        $value = $this->getAttribute('marketplaceScopeFilter');

        return $value;
    }

    /**
     * Sets the marketplaceScopeFilter value.
     *
     * @param AdGroupMarketplaceScopeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceScopeFilter(AdGroupMarketplaceScopeFilter|array|null $value): self
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
     * @return AdGroupNameFilter|null
     */
    public function getNameFilter(): ?AdGroupNameFilter
    {
        /** @var AdGroupNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param AdGroupNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(AdGroupNameFilter|array|null $value): self
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
     * @return AdGroupStateFilter|null
     */
    public function getStateFilter(): ?AdGroupStateFilter
    {
        /** @var AdGroupStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param AdGroupStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(AdGroupStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }
}
