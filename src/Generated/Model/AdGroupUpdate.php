<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupUpdate.
 */
final class AdGroupUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupUpdate';

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
            'required' => false,
            'nullable' => false,
        ],
        'adSettings' => [
            'type' => 'model',
            'class' => UpdateAdSettings::class,
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
            'class' => UpdateAdGroupBid::class,
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
        'creativeRotationType' => [
            'type' => 'enum',
            'class' => CreativeRotationType::class,
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
            'required' => false,
            'nullable' => false,
        ],
        'optimization' => [
            'type' => 'model',
            'class' => UpdateOptimization::class,
            'required' => false,
            'nullable' => false,
        ],
        'pacing' => [
            'type' => 'model',
            'class' => UpdatePacing::class,
            'required' => false,
            'nullable' => false,
        ],
        'purchaseOrderNumber' => [
            'type' => 'string',
            'required' => false,
            'nullable' => true,
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
        'targetingSettings' => [
            'type' => 'model',
            'class' => UpdateTargetingSettings::class,
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
     * @return UpdateAdSettings|null
     */
    public function getAdSettings(): ?UpdateAdSettings
    {
        /** @var UpdateAdSettings|null $value */
        $value = $this->getAttribute('adSettings');

        return $value;
    }

    /**
     * Sets the adSettings value.
     *
     * @param UpdateAdSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdSettings(UpdateAdSettings|array|null $value): self
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
     * @return UpdateAdGroupBid|null
     */
    public function getBid(): ?UpdateAdGroupBid
    {
        /** @var UpdateAdGroupBid|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets the bid value.
     *
     * @param UpdateAdGroupBid|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBid(UpdateAdGroupBid|array|null $value): self
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
     * @return UpdateOptimization|null
     */
    public function getOptimization(): ?UpdateOptimization
    {
        /** @var UpdateOptimization|null $value */
        $value = $this->getAttribute('optimization');

        return $value;
    }

    /**
     * Sets the optimization value.
     *
     * @param UpdateOptimization|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimization(UpdateOptimization|array|null $value): self
    {
        $this->setAttribute('optimization', $value);

        return $this;
    }

    /**
     * Returns the pacing value.
     *
     * @return UpdatePacing|null
     */
    public function getPacing(): ?UpdatePacing
    {
        /** @var UpdatePacing|null $value */
        $value = $this->getAttribute('pacing');

        return $value;
    }

    /**
     * Sets the pacing value.
     *
     * @param UpdatePacing|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPacing(UpdatePacing|array|null $value): self
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
     * @return UpdateTargetingSettings|null
     */
    public function getTargetingSettings(): ?UpdateTargetingSettings
    {
        /** @var UpdateTargetingSettings|null $value */
        $value = $this->getAttribute('targetingSettings');

        return $value;
    }

    /**
     * Sets the targetingSettings value.
     *
     * @param UpdateTargetingSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetingSettings(UpdateTargetingSettings|array|null $value): self
    {
        $this->setAttribute('targetingSettings', $value);

        return $this;
    }
}
