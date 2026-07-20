<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignUpdate.
 */
final class CampaignUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => false,
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
        'budgets' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateBudget::class,
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
        'endDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => true,
        ],
        'fees' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateCampaignFee::class,
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
                'class' => CreateCampaignFlight::class,
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
                'class' => CreateFrequency::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 3,
        ],
        'marketplaceConfigurations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateMarketplaceCampaignConfigurations::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
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
            'required' => false,
            'nullable' => false,
        ],
        'optimizations' => [
            'type' => 'model',
            'class' => UpdateCampaignOptimizations::class,
            'required' => false,
            'nullable' => false,
        ],
        'portfolioId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => true,
        ],
        'purchaseOrderNumber' => [
            'type' => 'string',
            'required' => false,
            'nullable' => true,
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
            'class' => UpdateState::class,
            'required' => false,
            'nullable' => false,
        ],
        'tags' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateTag::class,
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
     * Returns The object containing budget details for the campaign (for campaigns that support multiple budgets)..
     *
     * @return list<CreateBudget>|null
     */
    public function getBudgets(): ?array
    {
        /** @var list<CreateBudget>|null $value */
        $value = $this->getAttribute('budgets');

        return $value;
    }

    /**
     * Sets The object containing budget details for the campaign (for campaigns that support multiple budgets)..
     *
     * @param list<CreateBudget>|null $value New property value.
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
     * @return list<CreateCampaignFee>|null
     */
    public function getFees(): ?array
    {
        /** @var list<CreateCampaignFee>|null $value */
        $value = $this->getAttribute('fees');

        return $value;
    }

    /**
     * Sets Any fees associated with the campaign..
     *
     * @param list<CreateCampaignFee>|null $value New property value.
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
     * @return list<CreateCampaignFlight>|null
     */
    public function getFlights(): ?array
    {
        /** @var list<CreateCampaignFlight>|null $value */
        $value = $this->getAttribute('flights');

        return $value;
    }

    /**
     * Sets Flight details associated with the campaign..
     *
     * @param list<CreateCampaignFlight>|null $value New property value.
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
     * @return list<CreateFrequency>|null
     */
    public function getFrequencies(): ?array
    {
        /** @var list<CreateFrequency>|null $value */
        $value = $this->getAttribute('frequencies');

        return $value;
    }

    /**
     * Sets Any frequency caps associated with the campaign..
     *
     * @param list<CreateFrequency>|null $value New property value.
     * @return $this
     */
    public function setFrequencies(?array $value): self
    {
        $this->setAttribute('frequencies', $value);

        return $this;
    }

    /**
     * Returns List of marketplace-specific configurations for a global campaign that enables overriding certain attributes at individual marketplace level. For example, if a global campaign is ENABLED and startDate '2024-06-01' but needs to be PAUSED in DE with startDate..
     *
     * @return list<CreateMarketplaceCampaignConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<CreateMarketplaceCampaignConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global campaign that enables overriding certain attributes at individual marketplace level. For example, if a global campaign is ENABLED and startDate '2024-06-01' but needs to be PAUSED in DE with startDate..
     *
     * @param list<CreateMarketplaceCampaignConfigurations>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceConfigurations(?array $value): self
    {
        $this->setAttribute('marketplaceConfigurations', $value);

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
     * @return UpdateCampaignOptimizations|null
     */
    public function getOptimizations(): ?UpdateCampaignOptimizations
    {
        /** @var UpdateCampaignOptimizations|null $value */
        $value = $this->getAttribute('optimizations');

        return $value;
    }

    /**
     * Sets the optimizations value.
     *
     * @param UpdateCampaignOptimizations|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimizations(UpdateCampaignOptimizations|array|null $value): self
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
     * @return UpdateState|null
     */
    public function getState(): ?UpdateState
    {
        /** @var UpdateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param UpdateState|string|null $value New property value.
     * @return $this
     */
    public function setState(UpdateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the campaign..
     *
     * @return list<CreateTag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<CreateTag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the campaign..
     *
     * @param list<CreateTag>|null $value New property value.
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
}
