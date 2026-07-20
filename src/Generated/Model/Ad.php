<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Ad schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Ad.
 */
final class Ad extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Ad';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'activeCreative' => [
            'type' => 'model',
            'class' => Creative::class,
            'required' => false,
            'nullable' => false,
        ],
        'adGroupId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'adId' => [
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
        'adType' => [
            'type' => 'enum',
            'class' => AdType::class,
            'required' => true,
            'nullable' => false,
        ],
        'campaignId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'creative' => [
            'type' => 'model',
            'class' => Creative::class,
            'required' => true,
            'nullable' => false,
        ],
        'globalAdId' => [
            'type' => 'string',
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
                'class' => MarketplaceAdConfigurations::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'marketplaceScope' => [
            'type' => 'enum',
            'class' => MarketplaceScope::class,
            'required' => true,
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
    ];

    /**
     * Returns the activeCreative value.
     *
     * @return Creative|null
     */
    public function getActiveCreative(): ?Creative
    {
        /** @var Creative|null $value */
        $value = $this->getAttribute('activeCreative');

        return $value;
    }

    /**
     * Sets the activeCreative value.
     *
     * @param Creative|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setActiveCreative(Creative|array|null $value): self
    {
        $this->setAttribute('activeCreative', $value);

        return $this;
    }

    /**
     * Returns The ad group associated with the ad..
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
     * Sets The ad group associated with the ad..
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
     * Returns The identifier of the ad..
     *
     * @return string|null
     */
    public function getAdId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('adId');

        return $value;
    }

    /**
     * Sets The identifier of the ad..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdId(?string $value): self
    {
        $this->setAttribute('adId', $value);

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
     * Returns the adType value.
     *
     * @return AdType|null
     */
    public function getAdType(): ?AdType
    {
        /** @var AdType|null $value */
        $value = $this->getAttribute('adType');

        return $value;
    }

    /**
     * Sets the adType value.
     *
     * @param AdType|string|null $value New property value.
     * @return $this
     */
    public function setAdType(AdType|string|null $value): self
    {
        $this->setAttribute('adType', $value);

        return $this;
    }

    /**
     * Returns The campaign associated with the ad. It's a read-only field..
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
     * Sets The campaign associated with the ad. It's a read-only field..
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
     * Returns The date time that the ad was created..
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
     * Sets The date time that the ad was created..
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
     * Returns the creative value.
     *
     * @return Creative|null
     */
    public function getCreative(): ?Creative
    {
        /** @var Creative|null $value */
        $value = $this->getAttribute('creative');

        return $value;
    }

    /**
     * Sets the creative value.
     *
     * @param Creative|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreative(Creative|array|null $value): self
    {
        $this->setAttribute('creative', $value);

        return $this;
    }

    /**
     * Returns The global ad identifier that manages this marketplace ad..
     *
     * @return string|null
     */
    public function getGlobalAdId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('globalAdId');

        return $value;
    }

    /**
     * Sets The global ad identifier that manages this marketplace ad..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGlobalAdId(?string $value): self
    {
        $this->setAttribute('globalAdId', $value);

        return $this;
    }

    /**
     * Returns The date time that the ad was last updated..
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
     * Sets The date time that the ad was last updated..
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
     * Returns List of marketplace-specific configurations for a global ad that enables overriding certain attributes at individual marketplace level. For example, if a global ad is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace: DE, over..
     *
     * @return list<MarketplaceAdConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<MarketplaceAdConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global ad that enables overriding certain attributes at individual marketplace level. For example, if a global ad is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace: DE, over..
     *
     * @param list<MarketplaceAdConfigurations>|null $value New property value.
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
     * Returns The list of country codes representing amazon marketplaces in which the global ad is applicable. For Sponsored Ads, the marketplaces included should either be same as or subset of parent ad group. For ADSP, this represents retail domains such as Amazon.com,..
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
     * Sets The list of country codes representing amazon marketplaces in which the global ad is applicable. For Sponsored Ads, the marketplaces included should either be same as or subset of parent ad group. For ADSP, this represents retail domains such as Amazon.com,..
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
     * Returns The name of the ad..
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
     * Sets The name of the ad..
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
     * Returns Open ended labels with a key value pair applied to the ad..
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
     * Sets Open ended labels with a key value pair applied to the ad..
     *
     * @param list<Tag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }
}
