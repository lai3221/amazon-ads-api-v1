<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Target schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Target.
 */
final class Target extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Target';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroupId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'bid' => [
            'type' => 'model',
            'class' => TargetBid::class,
            'required' => false,
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
        'globalTargetId' => [
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
                'class' => MarketplaceTargetConfigurations::class,
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
        'negative' => [
            'type' => 'boolean',
            'required' => true,
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
        'targetDetails' => [
            'type' => 'model',
            'class' => TargetDetails::class,
            'required' => true,
            'nullable' => false,
        ],
        'targetId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'targetLevel' => [
            'type' => 'enum',
            'class' => TargetLevel::class,
            'required' => false,
            'nullable' => false,
        ],
        'targetType' => [
            'type' => 'enum',
            'class' => TargetType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A unique identifier for the ad group associated with the target. Only used for ad-group level targets..
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
     * Sets A unique identifier for the ad group associated with the target. Only used for ad-group level targets..
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
     * Returns the bid value.
     *
     * @return TargetBid|null
     */
    public function getBid(): ?TargetBid
    {
        /** @var TargetBid|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets the bid value.
     *
     * @param TargetBid|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBid(TargetBid|array|null $value): self
    {
        $this->setAttribute('bid', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the campaign associated with the target. Only used for campaign-level targets..
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
     * Sets A unique identifier for the campaign associated with the target. Only used for campaign-level targets..
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
     * Returns The date time the target was created..
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
     * Sets The date time the target was created..
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
     * Returns The global target identifier that manages this marketplace target..
     *
     * @return string|null
     */
    public function getGlobalTargetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('globalTargetId');

        return $value;
    }

    /**
     * Sets The global target identifier that manages this marketplace target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGlobalTargetId(?string $value): self
    {
        $this->setAttribute('globalTargetId', $value);

        return $this;
    }

    /**
     * Returns The date time the target was last updated..
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
     * Sets The date time the target was last updated..
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
     * Returns List of marketplace-specific configurations for a global target that enables overriding certain attributes at individual marketplace level. For example, if a global target is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace:..
     *
     * @return list<MarketplaceTargetConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<MarketplaceTargetConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global target that enables overriding certain attributes at individual marketplace level. For example, if a global target is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace:..
     *
     * @param list<MarketplaceTargetConfigurations>|null $value New property value.
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
     * Returns The list of marketplace in which the global target is applicable. The marketplaces included should either be same as or subset of parent campaign/ad group..
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
     * Sets The list of marketplace in which the global target is applicable. The marketplaces included should either be same as or subset of parent campaign/ad group..
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
     * Returns Indicates whether the target is negative or not..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets Indicates whether the target is negative or not..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

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
     * Returns Open ended labels with a key value pair applied to the target..
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
     * Sets Open ended labels with a key value pair applied to the target..
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
     * Returns the targetDetails value.
     *
     * @return TargetDetails|null
     */
    public function getTargetDetails(): ?TargetDetails
    {
        /** @var TargetDetails|null $value */
        $value = $this->getAttribute('targetDetails');

        return $value;
    }

    /**
     * Sets the targetDetails value.
     *
     * @param TargetDetails|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetDetails(TargetDetails|array|null $value): self
    {
        $this->setAttribute('targetDetails', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the target..
     *
     * @return string|null
     */
    public function getTargetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('targetId');

        return $value;
    }

    /**
     * Sets A unique identifier for the target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTargetId(?string $value): self
    {
        $this->setAttribute('targetId', $value);

        return $this;
    }

    /**
     * Returns the targetLevel value.
     *
     * @return TargetLevel|null
     */
    public function getTargetLevel(): ?TargetLevel
    {
        /** @var TargetLevel|null $value */
        $value = $this->getAttribute('targetLevel');

        return $value;
    }

    /**
     * Sets the targetLevel value.
     *
     * @param TargetLevel|string|null $value New property value.
     * @return $this
     */
    public function setTargetLevel(TargetLevel|string|null $value): self
    {
        $this->setAttribute('targetLevel', $value);

        return $this;
    }

    /**
     * Returns the targetType value.
     *
     * @return TargetType|null
     */
    public function getTargetType(): ?TargetType
    {
        /** @var TargetType|null $value */
        $value = $this->getAttribute('targetType');

        return $value;
    }

    /**
     * Sets the targetType value.
     *
     * @param TargetType|string|null $value New property value.
     * @return $this
     */
    public function setTargetType(TargetType|string|null $value): self
    {
        $this->setAttribute('targetType', $value);

        return $this;
    }
}
