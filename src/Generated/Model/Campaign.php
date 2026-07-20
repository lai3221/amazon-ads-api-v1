<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Campaign schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Campaign.
 */
final class Campaign extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Campaign';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'adomains' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'autoCreationSettings' => [
            'type' => 'model',
            'class' => AutoCreationSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'autoScaleGlobalCampaign' => [
            'type' => 'enum',
            'class' => AutoScaleGlobalCampaignSetting::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'budgets' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Budget::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'campaignId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'costType' => [
            'type' => 'enum',
            'class' => CostType::class,
            'required' => false,
            'nullable' => false,
        ],
        'countries' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => CountryCode::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 249,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'eligibleAutomatedTargetingTactics' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => TacticKey::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'fees' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CampaignFee::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'flights' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CampaignFlight::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 150,
        ],
        'frequencies' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Frequency::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 3,
        ],
        'globalCampaignId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'ineligibleAutomatedTargetingTactics' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => IneligibleAutomatedTargetingTactic::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'isMultiAdGroupsEnabled' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'lastUpdatedDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'marketplaceConfigurations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => MarketplaceCampaignConfigurations::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'marketplaceScope' => [
            'type' => 'enum',
            'class' => MarketplaceScope::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaces' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => Marketplace::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'optimizations' => [
            'type' => 'model',
            'class' => CampaignOptimizations::class,
            'required' => false,
            'nullable' => false,
        ],
        'portfolioId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'purchaseOrderNumber' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'salesChannel' => [
            'type' => 'enum',
            'class' => SalesChannel::class,
            'required' => false,
            'nullable' => false,
        ],
        'siteRestrictions' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => SiteRestriction::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'skanAppId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => State::class,
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'model',
            'class' => Status::class,
            'required' => false,
            'nullable' => false,
        ],
        'tags' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Tag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'targetedPGDealId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'targetsAmazonDeal' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return AdProduct|null
     */
    public function getAdProduct(): ?AdProduct
    {
        /** @var AdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param AdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(AdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns OpenRTB standard naming meaning: Advertiser domain for block list checking. This can be an array of strings for the case of rotating creatives. Exchanges can mandate that only one domain is allowed..
     *
     * @return list<string>|null
     */
    public function getAdomains(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('adomains');

        return $value;
    }

    /**
     * Sets OpenRTB standard naming meaning: Advertiser domain for block list checking. This can be an array of strings for the case of rotating creatives. Exchanges can mandate that only one domain is allowed..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAdomains(?array $value): self
    {
        $this->setAttribute('adomains', $value);

        return $this;
    }

    /**
     * Returns the autoCreationSettings value.
     *
     * @return AutoCreationSettings|null
     */
    public function getAutoCreationSettings(): ?AutoCreationSettings
    {
        /** @var AutoCreationSettings|null $value */
        $value = $this->getAttribute('autoCreationSettings');

        return $value;
    }

    /**
     * Sets the autoCreationSettings value.
     *
     * @param AutoCreationSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAutoCreationSettings(AutoCreationSettings|array|null $value): self
    {
        $this->setAttribute('autoCreationSettings', $value);

        return $this;
    }

    /**
     * Returns the autoScaleGlobalCampaign value.
     *
     * @return AutoScaleGlobalCampaignSetting|null
     */
    public function getAutoScaleGlobalCampaign(): ?AutoScaleGlobalCampaignSetting
    {
        /** @var AutoScaleGlobalCampaignSetting|null $value */
        $value = $this->getAttribute('autoScaleGlobalCampaign');

        return $value;
    }

    /**
     * Sets the autoScaleGlobalCampaign value.
     *
     * @param AutoScaleGlobalCampaignSetting|string|null $value New property value.
     * @return $this
     */
    public function setAutoScaleGlobalCampaign(AutoScaleGlobalCampaignSetting|string|null $value): self
    {
        $this->setAttribute('autoScaleGlobalCampaign', $value);

        return $this;
    }

    /**
     * Returns This is the ID of the brand that the campaign is associated with..
     *
     * @return string|null
     */
    public function getBrandId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('brandId');

        return $value;
    }

    /**
     * Sets This is the ID of the brand that the campaign is associated with..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBrandId(?string $value): self
    {
        $this->setAttribute('brandId', $value);

        return $this;
    }

    /**
     * Returns The object containing budget details for the campaign (for campaigns that support multiple budgets)..
     *
     * @return list<Budget>|null
     */
    public function getBudgets(): ?array
    {
        /** @var list<Budget>|null $value */
        $value = $this->getAttribute('budgets');

        return $value;
    }

    /**
     * Sets The object containing budget details for the campaign (for campaigns that support multiple budgets)..
     *
     * @param list<Budget>|null $value New property value.
     * @return $this
     */
    public function setBudgets(?array $value): self
    {
        $this->setAttribute('budgets', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for a campaign..
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
     * Sets A unique identifier for a campaign..
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
     * Returns the costType value.
     *
     * @return CostType|null
     */
    public function getCostType(): ?CostType
    {
        /** @var CostType|null $value */
        $value = $this->getAttribute('costType');

        return $value;
    }

    /**
     * Sets the costType value.
     *
     * @param CostType|string|null $value New property value.
     * @return $this
     */
    public function setCostType(CostType|string|null $value): self
    {
        $this->setAttribute('costType', $value);

        return $this;
    }

    /**
     * Returns This field is used in Sponsored Ads and ADSP and impacts targeted supply. For Sponsored Ads, the campaign.countries field determines what Amazon retail supply (Amazon.com, Amazon.co.uk, Amazon.mx, etc) the campaign will serve in. Similarly in ADSP, this has..
     *
     * @return list<CountryCode>|null
     */
    public function getCountries(): ?array
    {
        /** @var list<CountryCode>|null $value */
        $value = $this->getAttribute('countries');

        return $value;
    }

    /**
     * Sets This field is used in Sponsored Ads and ADSP and impacts targeted supply. For Sponsored Ads, the campaign.countries field determines what Amazon retail supply (Amazon.com, Amazon.co.uk, Amazon.mx, etc) the campaign will serve in. Similarly in ADSP, this has..
     *
     * @param list<CountryCode>|null $value New property value.
     * @return $this
     */
    public function setCountries(?array $value): self
    {
        $this->setAttribute('countries', $value);

        return $this;
    }

    /**
     * Returns The date time that the campaign was created..
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets The date time that the campaign was created..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns List of tactic type and inventory type pairs that are eligible for use with this campaign..
     *
     * @return list<TacticKey>|null
     */
    public function getEligibleAutomatedTargetingTactics(): ?array
    {
        /** @var list<TacticKey>|null $value */
        $value = $this->getAttribute('eligibleAutomatedTargetingTactics');

        return $value;
    }

    /**
     * Sets List of tactic type and inventory type pairs that are eligible for use with this campaign..
     *
     * @param list<TacticKey>|null $value New property value.
     * @return $this
     */
    public function setEligibleAutomatedTargetingTactics(?array $value): self
    {
        $this->setAttribute('eligibleAutomatedTargetingTactics', $value);

        return $this;
    }

    /**
     * Returns The end date time for the campaign..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDateTime');

        return $value;
    }

    /**
     * Sets The end date time for the campaign..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDateTime', $value);

        return $this;
    }

    /**
     * Returns Any fees associated with the campaign..
     *
     * @return list<CampaignFee>|null
     */
    public function getFees(): ?array
    {
        /** @var list<CampaignFee>|null $value */
        $value = $this->getAttribute('fees');

        return $value;
    }

    /**
     * Sets Any fees associated with the campaign..
     *
     * @param list<CampaignFee>|null $value New property value.
     * @return $this
     */
    public function setFees(?array $value): self
    {
        $this->setAttribute('fees', $value);

        return $this;
    }

    /**
     * Returns Flight details associated with the campaign..
     *
     * @return list<CampaignFlight>|null
     */
    public function getFlights(): ?array
    {
        /** @var list<CampaignFlight>|null $value */
        $value = $this->getAttribute('flights');

        return $value;
    }

    /**
     * Sets Flight details associated with the campaign..
     *
     * @param list<CampaignFlight>|null $value New property value.
     * @return $this
     */
    public function setFlights(?array $value): self
    {
        $this->setAttribute('flights', $value);

        return $this;
    }

    /**
     * Returns Any frequency caps associated with the campaign..
     *
     * @return list<Frequency>|null
     */
    public function getFrequencies(): ?array
    {
        /** @var list<Frequency>|null $value */
        $value = $this->getAttribute('frequencies');

        return $value;
    }

    /**
     * Sets Any frequency caps associated with the campaign..
     *
     * @param list<Frequency>|null $value New property value.
     * @return $this
     */
    public function setFrequencies(?array $value): self
    {
        $this->setAttribute('frequencies', $value);

        return $this;
    }

    /**
     * Returns The global campaign identifier that manages this marketplace campaign..
     *
     * @return string|null
     */
    public function getGlobalCampaignId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('globalCampaignId');

        return $value;
    }

    /**
     * Sets The global campaign identifier that manages this marketplace campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGlobalCampaignId(?string $value): self
    {
        $this->setAttribute('globalCampaignId', $value);

        return $this;
    }

    /**
     * Returns List of tactic type and inventory type pairs that are ineligible for use with this campaign, along with reasons for ineligibility..
     *
     * @return list<IneligibleAutomatedTargetingTactic>|null
     */
    public function getIneligibleAutomatedTargetingTactics(): ?array
    {
        /** @var list<IneligibleAutomatedTargetingTactic>|null $value */
        $value = $this->getAttribute('ineligibleAutomatedTargetingTactics');

        return $value;
    }

    /**
     * Sets List of tactic type and inventory type pairs that are ineligible for use with this campaign, along with reasons for ineligibility..
     *
     * @param list<IneligibleAutomatedTargetingTactic>|null $value New property value.
     * @return $this
     */
    public function setIneligibleAutomatedTargetingTactics(?array $value): self
    {
        $this->setAttribute('ineligibleAutomatedTargetingTactics', $value);

        return $this;
    }

    /**
     * Returns A read-only field that indicates whether a campaign supports multiple adGroups..
     *
     * @return bool|null
     */
    public function getIsMultiAdGroupsEnabled(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isMultiAdGroupsEnabled');

        return $value;
    }

    /**
     * Sets A read-only field that indicates whether a campaign supports multiple adGroups..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsMultiAdGroupsEnabled(?bool $value): self
    {
        $this->setAttribute('isMultiAdGroupsEnabled', $value);

        return $this;
    }

    /**
     * Returns The date time that the campaign was last updated..
     *
     * @return \DateTimeImmutable|null
     */
    public function getLastUpdatedDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('lastUpdatedDateTime');

        return $value;
    }

    /**
     * Sets The date time that the campaign was last updated..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setLastUpdatedDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('lastUpdatedDateTime', $value);

        return $this;
    }

    /**
     * Returns List of marketplace-specific configurations for a global campaign that enables overriding certain attributes at individual marketplace level. For example, if a global campaign is ENABLED and startDate '2024-06-01' but needs to be PAUSED in DE with startDate..
     *
     * @return list<MarketplaceCampaignConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<MarketplaceCampaignConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global campaign that enables overriding certain attributes at individual marketplace level. For example, if a global campaign is ENABLED and startDate '2024-06-01' but needs to be PAUSED in DE with startDate..
     *
     * @param list<MarketplaceCampaignConfigurations>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceConfigurations(?array $value): self
    {
        $this->setAttribute('marketplaceConfigurations', $value);

        return $this;
    }

    /**
     * Returns the marketplaceScope value.
     *
     * @return MarketplaceScope|null
     */
    public function getMarketplaceScope(): ?MarketplaceScope
    {
        /** @var MarketplaceScope|null $value */
        $value = $this->getAttribute('marketplaceScope');

        return $value;
    }

    /**
     * Sets the marketplaceScope value.
     *
     * @param MarketplaceScope|string|null $value New property value.
     * @return $this
     */
    public function setMarketplaceScope(MarketplaceScope|string|null $value): self
    {
        $this->setAttribute('marketplaceScope', $value);

        return $this;
    }

    /**
     * Returns This represents retail domains such as Amazon.com, Amazon.co.uk, and Amazon.mx, each corresponding to a country where an Amazon customer can shop. ADSP campaigns can be created by specifying either countries or marketplaces, but at least one of these attrib..
     *
     * @return list<Marketplace>|null
     */
    public function getMarketplaces(): ?array
    {
        /** @var list<Marketplace>|null $value */
        $value = $this->getAttribute('marketplaces');

        return $value;
    }

    /**
     * Sets This represents retail domains such as Amazon.com, Amazon.co.uk, and Amazon.mx, each corresponding to a country where an Amazon customer can shop. ADSP campaigns can be created by specifying either countries or marketplaces, but at least one of these attrib..
     *
     * @param list<Marketplace>|null $value New property value.
     * @return $this
     */
    public function setMarketplaces(?array $value): self
    {
        $this->setAttribute('marketplaces', $value);

        return $this;
    }

    /**
     * Returns The name of the campaign..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets The name of the campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns the optimizations value.
     *
     * @return CampaignOptimizations|null
     */
    public function getOptimizations(): ?CampaignOptimizations
    {
        /** @var CampaignOptimizations|null $value */
        $value = $this->getAttribute('optimizations');

        return $value;
    }

    /**
     * Sets the optimizations value.
     *
     * @param CampaignOptimizations|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimizations(CampaignOptimizations|array|null $value): self
    {
        $this->setAttribute('optimizations', $value);

        return $this;
    }

    /**
     * Returns The ID of the portfolio associated with the campaign..
     *
     * @return string|null
     */
    public function getPortfolioId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('portfolioId');

        return $value;
    }

    /**
     * Sets The ID of the portfolio associated with the campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPortfolioId(?string $value): self
    {
        $this->setAttribute('portfolioId', $value);

        return $this;
    }

    /**
     * Returns The purchase order number associated with the campaign..
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('purchaseOrderNumber');

        return $value;
    }

    /**
     * Sets The purchase order number associated with the campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPurchaseOrderNumber(?string $value): self
    {
        $this->setAttribute('purchaseOrderNumber', $value);

        return $this;
    }

    /**
     * Returns the salesChannel value.
     *
     * @return SalesChannel|null
     */
    public function getSalesChannel(): ?SalesChannel
    {
        /** @var SalesChannel|null $value */
        $value = $this->getAttribute('salesChannel');

        return $value;
    }

    /**
     * Sets the salesChannel value.
     *
     * @param SalesChannel|string|null $value New property value.
     * @return $this
     */
    public function setSalesChannel(SalesChannel|string|null $value): self
    {
        $this->setAttribute('salesChannel', $value);

        return $this;
    }

    /**
     * Returns Restrict the ad to a particular site..
     *
     * @return list<SiteRestriction>|null
     */
    public function getSiteRestrictions(): ?array
    {
        /** @var list<SiteRestriction>|null $value */
        $value = $this->getAttribute('siteRestrictions');

        return $value;
    }

    /**
     * Sets Restrict the ad to a particular site..
     *
     * @param list<SiteRestriction>|null $value New property value.
     * @return $this
     */
    public function setSiteRestrictions(?array $value): self
    {
        $this->setAttribute('siteRestrictions', $value);

        return $this;
    }

    /**
     * Returns StoreKit AdNetwork application ID. Represents iTunes application ID with which SKAN-enabled campaigns are associated..
     *
     * @return string|null
     */
    public function getSkanAppId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('skanAppId');

        return $value;
    }

    /**
     * Sets StoreKit AdNetwork application ID. Represents iTunes application ID with which SKAN-enabled campaigns are associated..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSkanAppId(?string $value): self
    {
        $this->setAttribute('skanAppId', $value);

        return $this;
    }

    /**
     * Returns The start date time for the campaign..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDateTime');

        return $value;
    }

    /**
     * Sets The start date time for the campaign..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }

    /**
     * Returns the state value.
     *
     * @return State|null
     */
    public function getState(): ?State
    {
        /** @var State|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param State|string|null $value New property value.
     * @return $this
     */
    public function setState(State|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return Status|null
     */
    public function getStatus(): ?Status
    {
        /** @var Status|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param Status|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatus(Status|array|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the campaign..
     *
     * @return list<Tag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<Tag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the campaign..
     *
     * @param list<Tag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }

    /**
     * Returns DealId associated with the campaign..
     *
     * @return string|null
     */
    public function getTargetedPGDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('targetedPGDealId');

        return $value;
    }

    /**
     * Sets DealId associated with the campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTargetedPGDealId(?string $value): self
    {
        $this->setAttribute('targetedPGDealId', $value);

        return $this;
    }

    /**
     * Returns If the campaign is targeting an Amazon deal, the value will be true, and the campaign and ad group(s) will be read-only..
     *
     * @return bool|null
     */
    public function getTargetsAmazonDeal(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('targetsAmazonDeal');

        return $value;
    }

    /**
     * Sets If the campaign is targeting an Amazon deal, the value will be true, and the campaign and ad group(s) will be read-only..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setTargetsAmazonDeal(?bool $value): self
    {
        $this->setAttribute('targetsAmazonDeal', $value);

        return $this;
    }
}
