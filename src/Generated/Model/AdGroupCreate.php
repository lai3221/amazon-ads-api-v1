<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupCreate.
 */
final class AdGroupCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupCreate';

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
        'adSettings' => [
            'type' => 'model',
            'class' => CreateAdSettings::class,
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
            'class' => CreateAdGroupBid::class,
            'required' => false,
            'nullable' => false,
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
            'maxItems' => 3,
        ],
        'campaignId' => [
            'type' => 'string',
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
                'class' => CreateFee::class,
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
                'class' => CreateFrequency::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 3,
        ],
        'inventoryType' => [
            'type' => 'enum',
            'class' => InventoryType::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceConfigurations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateMarketplaceAdGroupConfigurations::class,
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
            'class' => CreateOptimization::class,
            'required' => false,
            'nullable' => false,
        ],
        'pacing' => [
            'type' => 'model',
            'class' => CreatePacing::class,
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
            'class' => CreateState::class,
            'required' => true,
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
        'targetingSettings' => [
            'type' => 'model',
            'class' => CreateTargetingSettings::class,
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
     * Returns the adSettings value.
     *
     * @return CreateAdSettings|null
     */
    public function getAdSettings(): ?CreateAdSettings
    {
        /** @var CreateAdSettings|null $value */
        $value = $this->getAttribute('adSettings');

        return $value;
    }

    /**
     * Sets the adSettings value.
     *
     * @param CreateAdSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdSettings(CreateAdSettings|array|null $value): self
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
     * @return CreateAdGroupBid|null
     */
    public function getBid(): ?CreateAdGroupBid
    {
        /** @var CreateAdGroupBid|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets the bid value.
     *
     * @param CreateAdGroupBid|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBid(CreateAdGroupBid|array|null $value): self
    {
        $this->setAttribute('bid', $value);

        return $this;
    }

    /**
     * Returns An object containing budget details for the ad group..
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
     * Sets An object containing budget details for the ad group..
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
     * @return list<CreateFee>|null
     */
    public function getFees(): ?array
    {
        /** @var list<CreateFee>|null $value */
        $value = $this->getAttribute('fees');

        return $value;
    }

    /**
     * Sets The fees associated with the ad group..
     *
     * @param list<CreateFee>|null $value New property value.
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
     * @return list<CreateFrequency>|null
     */
    public function getFrequencies(): ?array
    {
        /** @var list<CreateFrequency>|null $value */
        $value = $this->getAttribute('frequencies');

        return $value;
    }

    /**
     * Sets An object containing frequency details for the ad group..
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
     * Returns List of marketplace-specific configurations for a global ad group that enables overriding certain attributes at individual marketplace level. For example, if a global ad group state is ENABLED and needs to be PAUSED only in DE marketplace, you can specify:..
     *
     * @return list<CreateMarketplaceAdGroupConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<CreateMarketplaceAdGroupConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global ad group that enables overriding certain attributes at individual marketplace level. For example, if a global ad group state is ENABLED and needs to be PAUSED only in DE marketplace, you can specify:..
     *
     * @param list<CreateMarketplaceAdGroupConfigurations>|null $value New property value.
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
     * @return CreateOptimization|null
     */
    public function getOptimization(): ?CreateOptimization
    {
        /** @var CreateOptimization|null $value */
        $value = $this->getAttribute('optimization');

        return $value;
    }

    /**
     * Sets the optimization value.
     *
     * @param CreateOptimization|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimization(CreateOptimization|array|null $value): self
    {
        $this->setAttribute('optimization', $value);

        return $this;
    }

    /**
     * Returns the pacing value.
     *
     * @return CreatePacing|null
     */
    public function getPacing(): ?CreatePacing
    {
        /** @var CreatePacing|null $value */
        $value = $this->getAttribute('pacing');

        return $value;
    }

    /**
     * Sets the pacing value.
     *
     * @param CreatePacing|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPacing(CreatePacing|array|null $value): self
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
     * @return CreateState|null
     */
    public function getState(): ?CreateState
    {
        /** @var CreateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param CreateState|string|null $value New property value.
     * @return $this
     */
    public function setState(CreateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the ad group..
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
     * Sets Open ended labels with a key value pair applied to the ad group..
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
     * Returns the targetingSettings value.
     *
     * @return CreateTargetingSettings|null
     */
    public function getTargetingSettings(): ?CreateTargetingSettings
    {
        /** @var CreateTargetingSettings|null $value */
        $value = $this->getAttribute('targetingSettings');

        return $value;
    }

    /**
     * Sets the targetingSettings value.
     *
     * @param CreateTargetingSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetingSettings(CreateTargetingSettings|array|null $value): self
    {
        $this->setAttribute('targetingSettings', $value);

        return $this;
    }
}
