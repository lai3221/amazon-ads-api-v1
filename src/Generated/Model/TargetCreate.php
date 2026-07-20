<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetCreate.
 */
final class TargetCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetCreate';

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
            'class' => CreateTargetBid::class,
            'required' => false,
            'nullable' => false,
        ],
        'campaignId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceConfigurations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateMarketplaceTargetConfigurations::class,
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
        'targetDetails' => [
            'type' => 'model',
            'class' => CreateTargetDetails::class,
            'required' => true,
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
     * @return CreateTargetBid|null
     */
    public function getBid(): ?CreateTargetBid
    {
        /** @var CreateTargetBid|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets the bid value.
     *
     * @param CreateTargetBid|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBid(CreateTargetBid|array|null $value): self
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
     * Returns List of marketplace-specific configurations for a global target that enables overriding certain attributes at individual marketplace level. For example, if a global target is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace:..
     *
     * @return list<CreateMarketplaceTargetConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<CreateMarketplaceTargetConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global target that enables overriding certain attributes at individual marketplace level. For example, if a global target is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace:..
     *
     * @param list<CreateMarketplaceTargetConfigurations>|null $value New property value.
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
     * Returns Open ended labels with a key value pair applied to the target..
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
     * Sets Open ended labels with a key value pair applied to the target..
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
     * Returns the targetDetails value.
     *
     * @return CreateTargetDetails|null
     */
    public function getTargetDetails(): ?CreateTargetDetails
    {
        /** @var CreateTargetDetails|null $value */
        $value = $this->getAttribute('targetDetails');

        return $value;
    }

    /**
     * Sets the targetDetails value.
     *
     * @param CreateTargetDetails|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetDetails(CreateTargetDetails|array|null $value): self
    {
        $this->setAttribute('targetDetails', $value);

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
