<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryCampaignRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryCampaignRequest.
 */
final class QueryCampaignRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryCampaignRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProductFilter' => [
            'type' => 'model',
            'class' => CampaignAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'campaignIdFilter' => [
            'type' => 'model',
            'class' => CampaignCampaignIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'goalFilter' => [
            'type' => 'model',
            'class' => CampaignGoalFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceScopeFilter' => [
            'type' => 'model',
            'class' => CampaignMarketplaceScopeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 5000,
        ],
        'nameFilter' => [
            'type' => 'model',
            'class' => CampaignNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'portfolioIdFilter' => [
            'type' => 'model',
            'class' => CampaignPortfolioIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => CampaignStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProductFilter value.
     *
     * @return CampaignAdProductFilter|null
     */
    public function getAdProductFilter(): ?CampaignAdProductFilter
    {
        /** @var CampaignAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param CampaignAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(CampaignAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the campaignIdFilter value.
     *
     * @return CampaignCampaignIdFilter|null
     */
    public function getCampaignIdFilter(): ?CampaignCampaignIdFilter
    {
        /** @var CampaignCampaignIdFilter|null $value */
        $value = $this->getAttribute('campaignIdFilter');

        return $value;
    }

    /**
     * Sets the campaignIdFilter value.
     *
     * @param CampaignCampaignIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCampaignIdFilter(CampaignCampaignIdFilter|array|null $value): self
    {
        $this->setAttribute('campaignIdFilter', $value);

        return $this;
    }

    /**
     * Returns the goalFilter value.
     *
     * @return CampaignGoalFilter|null
     */
    public function getGoalFilter(): ?CampaignGoalFilter
    {
        /** @var CampaignGoalFilter|null $value */
        $value = $this->getAttribute('goalFilter');

        return $value;
    }

    /**
     * Sets the goalFilter value.
     *
     * @param CampaignGoalFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGoalFilter(CampaignGoalFilter|array|null $value): self
    {
        $this->setAttribute('goalFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceScopeFilter value.
     *
     * @return CampaignMarketplaceScopeFilter|null
     */
    public function getMarketplaceScopeFilter(): ?CampaignMarketplaceScopeFilter
    {
        /** @var CampaignMarketplaceScopeFilter|null $value */
        $value = $this->getAttribute('marketplaceScopeFilter');

        return $value;
    }

    /**
     * Sets the marketplaceScopeFilter value.
     *
     * @param CampaignMarketplaceScopeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceScopeFilter(CampaignMarketplaceScopeFilter|array|null $value): self
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
     * @return CampaignNameFilter|null
     */
    public function getNameFilter(): ?CampaignNameFilter
    {
        /** @var CampaignNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param CampaignNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(CampaignNameFilter|array|null $value): self
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
     * Returns the portfolioIdFilter value.
     *
     * @return CampaignPortfolioIdFilter|null
     */
    public function getPortfolioIdFilter(): ?CampaignPortfolioIdFilter
    {
        /** @var CampaignPortfolioIdFilter|null $value */
        $value = $this->getAttribute('portfolioIdFilter');

        return $value;
    }

    /**
     * Sets the portfolioIdFilter value.
     *
     * @param CampaignPortfolioIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPortfolioIdFilter(CampaignPortfolioIdFilter|array|null $value): self
    {
        $this->setAttribute('portfolioIdFilter', $value);

        return $this;
    }

    /**
     * Returns the stateFilter value.
     *
     * @return CampaignStateFilter|null
     */
    public function getStateFilter(): ?CampaignStateFilter
    {
        /** @var CampaignStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param CampaignStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(CampaignStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }
}
