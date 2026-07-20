<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroup schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroup.
 */
final class AdGroup extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroup';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroupId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'adSettings' => [
            'type' => 'model',
            'class' => AdSettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'advertisedProductCategoryIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'bid' => [
            'type' => 'model',
            'class' => AdGroupBid::class,
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
            'maxItems' => 3,
        ],
        'campaignId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'creativeRotationType' => [
            'type' => 'enum',
            'class' => CreativeRotationType::class,
            'required' => false,
            'nullable' => false,
        ],
        'creativeType' => [
            'type' => 'enum',
            'class' => CreativeType::class,
            'required' => false,
            'nullable' => false,
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
                'class' => Fee::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 7,
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
        'globalAdGroupId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'inventoryType' => [
            'type' => 'enum',
            'class' => InventoryType::class,
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
                'class' => MarketplaceAdGroupConfigurations::class,
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
        'optimization' => [
            'type' => 'model',
            'class' => Optimization::class,
            'required' => false,
            'nullable' => false,
        ],
        'pacing' => [
            'type' => 'model',
            'class' => Pacing::class,
            'required' => false,
            'nullable' => false,
        ],
        'purchaseOrderNumber' => [
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
        'targetingSettings' => [
            'type' => 'model',
            'class' => TargetingSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The unique identifier of the ad group..
     *
     * @return string|null
     */
    public function getAdGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('adGroupId');

        return $value;
    }

    /**
     * Sets The unique identifier of the ad group..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdGroupId(?string $value): self
    {
        $this->setAttribute('adGroupId', $value);

        return $this;
    }

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
     * Returns the adSettings value.
     *
     * @return AdSettings|null
     */
    public function getAdSettings(): ?AdSettings
    {
        /** @var AdSettings|null $value */
        $value = $this->getAttribute('adSettings');

        return $value;
    }

    /**
     * Sets the adSettings value.
     *
     * @param AdSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdSettings(AdSettings|array|null $value): self
    {
        $this->setAttribute('adSettings', $value);

        return $this;
    }

    /**
     * Returns The array of identifiers of advertised product categories associated with the ad group. For VIDEO ad group type only one parent product category or multiple sub-categories from one parent product category are allowed..
     *
     * @return list<string>|null
     */
    public function getAdvertisedProductCategoryIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('advertisedProductCategoryIds');

        return $value;
    }

    /**
     * Sets The array of identifiers of advertised product categories associated with the ad group. For VIDEO ad group type only one parent product category or multiple sub-categories from one parent product category are allowed..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAdvertisedProductCategoryIds(?array $value): self
    {
        $this->setAttribute('advertisedProductCategoryIds', $value);

        return $this;
    }

    /**
     * Returns the bid value.
     *
     * @return AdGroupBid|null
     */
    public function getBid(): ?AdGroupBid
    {
        /** @var AdGroupBid|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets the bid value.
     *
     * @param AdGroupBid|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBid(AdGroupBid|array|null $value): self
    {
        $this->setAttribute('bid', $value);

        return $this;
    }

    /**
     * Returns An object containing budget details for the ad group..
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
     * Sets An object containing budget details for the ad group..
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
     * Returns The unique identifier of the campaign the ad group belongs to..
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
     * Sets The unique identifier of the campaign the ad group belongs to..
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
     * Returns The date time that the ad group was created..
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
     * Sets The date time that the ad group was created..
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
     * Returns the creativeRotationType value.
     *
     * @return CreativeRotationType|null
     */
    public function getCreativeRotationType(): ?CreativeRotationType
    {
        /** @var CreativeRotationType|null $value */
        $value = $this->getAttribute('creativeRotationType');

        return $value;
    }

    /**
     * Sets the creativeRotationType value.
     *
     * @param CreativeRotationType|string|null $value New property value.
     * @return $this
     */
    public function setCreativeRotationType(CreativeRotationType|string|null $value): self
    {
        $this->setAttribute('creativeRotationType', $value);

        return $this;
    }

    /**
     * Returns the creativeType value.
     *
     * @return CreativeType|null
     */
    public function getCreativeType(): ?CreativeType
    {
        /** @var CreativeType|null $value */
        $value = $this->getAttribute('creativeType');

        return $value;
    }

    /**
     * Sets the creativeType value.
     *
     * @param CreativeType|string|null $value New property value.
     * @return $this
     */
    public function setCreativeType(CreativeType|string|null $value): self
    {
        $this->setAttribute('creativeType', $value);

        return $this;
    }

    /**
     * Returns The end date time for the ad group..
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
     * Sets The end date time for the ad group..
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
     * Returns The fees associated with the ad group..
     *
     * @return list<Fee>|null
     */
    public function getFees(): ?array
    {
        /** @var list<Fee>|null $value */
        $value = $this->getAttribute('fees');

        return $value;
    }

    /**
     * Sets The fees associated with the ad group..
     *
     * @param list<Fee>|null $value New property value.
     * @return $this
     */
    public function setFees(?array $value): self
    {
        $this->setAttribute('fees', $value);

        return $this;
    }

    /**
     * Returns An object containing frequency details for the ad group..
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
     * Sets An object containing frequency details for the ad group..
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
     * Returns The global adGroup identifier that manages this marketplace adGroup..
     *
     * @return string|null
     */
    public function getGlobalAdGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('globalAdGroupId');

        return $value;
    }

    /**
     * Sets The global adGroup identifier that manages this marketplace adGroup..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGlobalAdGroupId(?string $value): self
    {
        $this->setAttribute('globalAdGroupId', $value);

        return $this;
    }

    /**
     * Returns the inventoryType value.
     *
     * @return InventoryType|null
     */
    public function getInventoryType(): ?InventoryType
    {
        /** @var InventoryType|null $value */
        $value = $this->getAttribute('inventoryType');

        return $value;
    }

    /**
     * Sets the inventoryType value.
     *
     * @param InventoryType|string|null $value New property value.
     * @return $this
     */
    public function setInventoryType(InventoryType|string|null $value): self
    {
        $this->setAttribute('inventoryType', $value);

        return $this;
    }

    /**
     * Returns The date time that the ad group was last updated..
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
     * Sets The date time that the ad group was last updated..
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
     * Returns List of marketplace-specific configurations for a global ad group that enables overriding certain attributes at individual marketplace level. For example, if a global ad group state is ENABLED and needs to be PAUSED only in DE marketplace, you can specify:..
     *
     * @return list<MarketplaceAdGroupConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<MarketplaceAdGroupConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global ad group that enables overriding certain attributes at individual marketplace level. For example, if a global ad group state is ENABLED and needs to be PAUSED only in DE marketplace, you can specify:..
     *
     * @param list<MarketplaceAdGroupConfigurations>|null $value New property value.
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
     * Returns The list of country codes representing amazon marketplaces in which the global ad group is applicable. The marketplaces included should either be same as or subset of parent campaign..
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
     * Sets The list of country codes representing amazon marketplaces in which the global ad group is applicable. The marketplaces included should either be same as or subset of parent campaign..
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
     * Returns The name of the ad group..
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
     * Sets The name of the ad group..
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
     * Returns the optimization value.
     *
     * @return Optimization|null
     */
    public function getOptimization(): ?Optimization
    {
        /** @var Optimization|null $value */
        $value = $this->getAttribute('optimization');

        return $value;
    }

    /**
     * Sets the optimization value.
     *
     * @param Optimization|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimization(Optimization|array|null $value): self
    {
        $this->setAttribute('optimization', $value);

        return $this;
    }

    /**
     * Returns the pacing value.
     *
     * @return Pacing|null
     */
    public function getPacing(): ?Pacing
    {
        /** @var Pacing|null $value */
        $value = $this->getAttribute('pacing');

        return $value;
    }

    /**
     * Sets the pacing value.
     *
     * @param Pacing|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPacing(Pacing|array|null $value): self
    {
        $this->setAttribute('pacing', $value);

        return $this;
    }

    /**
     * Returns The purchase order number associated with the ad group..
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
     * Sets The purchase order number associated with the ad group..
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
     * Returns The start date time for the ad group..
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
     * Sets The start date time for the ad group..
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
     * Returns Open ended labels with a key value pair applied to the ad group..
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
     * Sets Open ended labels with a key value pair applied to the ad group..
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
     * Returns the targetingSettings value.
     *
     * @return TargetingSettings|null
     */
    public function getTargetingSettings(): ?TargetingSettings
    {
        /** @var TargetingSettings|null $value */
        $value = $this->getAttribute('targetingSettings');

        return $value;
    }

    /**
     * Sets the targetingSettings value.
     *
     * @param TargetingSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetingSettings(TargetingSettings|array|null $value): self
    {
        $this->setAttribute('targetingSettings', $value);

        return $this;
    }
}
