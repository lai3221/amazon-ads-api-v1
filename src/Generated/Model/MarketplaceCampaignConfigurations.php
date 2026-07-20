<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MarketplaceCampaignConfigurations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MarketplaceCampaignConfigurations.
 */
final class MarketplaceCampaignConfigurations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MarketplaceCampaignConfigurations';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'campaignId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'overrides' => [
            'type' => 'model',
            'class' => MarketplaceCampaignFieldOverrides::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Represents marketplace campaign id (Ex: campaignId-US) associated to global campaign (Ex: campaignId-Global)..
     *
     * @return string|null
     */
    public function getCampaignId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('campaignId');

        return $value;
    }

    /**
     * Sets Represents marketplace campaign id (Ex: campaignId-US) associated to global campaign (Ex: campaignId-Global)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCampaignId(?string $value): self
    {
        $this->setAttribute('campaignId', $value);

        return $this;
    }

    /**
     * Returns the marketplace value.
     *
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('marketplace');

        return $value;
    }

    /**
     * Sets the marketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('marketplace', $value);

        return $this;
    }

    /**
     * Returns the overrides value.
     *
     * @return MarketplaceCampaignFieldOverrides|null
     */
    public function getOverrides(): ?MarketplaceCampaignFieldOverrides
    {
        /** @var MarketplaceCampaignFieldOverrides|null $value */
        $value = $this->getAttribute('overrides');

        return $value;
    }

    /**
     * Sets the overrides value.
     *
     * @param MarketplaceCampaignFieldOverrides|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOverrides(MarketplaceCampaignFieldOverrides|array|null $value): self
    {
        $this->setAttribute('overrides', $value);

        return $this;
    }
}
