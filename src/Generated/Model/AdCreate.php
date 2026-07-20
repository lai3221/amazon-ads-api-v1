<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdCreate.
 */
final class AdCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdCreate';

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
        'adType' => [
            'type' => 'enum',
            'class' => AdType::class,
            'required' => true,
            'nullable' => false,
        ],
        'creative' => [
            'type' => 'model',
            'class' => CreateCreative::class,
            'required' => true,
            'nullable' => false,
        ],
        'marketplaceConfigurations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateMarketplaceAdConfigurations::class,
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
    ];

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
     * Returns the creative value.
     *
     * @return CreateCreative|null
     */
    public function getCreative(): ?CreateCreative
    {
        /** @var CreateCreative|null $value */
        $value = $this->getAttribute('creative');

        return $value;
    }

    /**
     * Sets the creative value.
     *
     * @param CreateCreative|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreative(CreateCreative|array|null $value): self
    {
        $this->setAttribute('creative', $value);

        return $this;
    }

    /**
     * Returns List of marketplace-specific configurations for a global ad that enables overriding certain attributes at individual marketplace level. For example, if a global ad is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace: DE, over..
     *
     * @return list<CreateMarketplaceAdConfigurations>|null
     */
    public function getMarketplaceConfigurations(): ?array
    {
        /** @var list<CreateMarketplaceAdConfigurations>|null $value */
        $value = $this->getAttribute('marketplaceConfigurations');

        return $value;
    }

    /**
     * Sets List of marketplace-specific configurations for a global ad that enables overriding certain attributes at individual marketplace level. For example, if a global ad is ENABLED but needs to be PAUSED in DE marketplace, you can specify: [{marketplace: DE, over..
     *
     * @param list<CreateMarketplaceAdConfigurations>|null $value New property value.
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
     * Returns Open ended labels with a key value pair applied to the ad..
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
     * Sets Open ended labels with a key value pair applied to the ad..
     *
     * @param list<CreateTag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }
}
