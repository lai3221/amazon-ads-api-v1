<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionCreate.
 */
final class AdExtensionCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtensionSettings' => [
            'type' => 'model',
            'class' => CreateAdExtensionSettings::class,
            'required' => true,
            'nullable' => false,
        ],
        'adExtensionStatus' => [
            'type' => 'enum',
            'class' => AdExtensionStatus::class,
            'required' => false,
            'nullable' => false,
        ],
        'adExtensionType' => [
            'type' => 'enum',
            'class' => AdExtensionType::class,
            'required' => true,
            'nullable' => false,
        ],
        'adGroupId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'adId' => [
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
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 30,
        ],
        'state' => [
            'type' => 'enum',
            'class' => CreateState::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adExtensionSettings value.
     *
     * @return CreateAdExtensionSettings|null
     */
    public function getAdExtensionSettings(): ?CreateAdExtensionSettings
    {
        /** @var CreateAdExtensionSettings|null $value */
        $value = $this->getAttribute('adExtensionSettings');

        return $value;
    }

    /**
     * Sets the adExtensionSettings value.
     *
     * @param CreateAdExtensionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtensionSettings(CreateAdExtensionSettings|array|null $value): self
    {
        $this->setAttribute('adExtensionSettings', $value);

        return $this;
    }

    /**
     * Returns the adExtensionStatus value.
     *
     * @return AdExtensionStatus|null
     */
    public function getAdExtensionStatus(): ?AdExtensionStatus
    {
        /** @var AdExtensionStatus|null $value */
        $value = $this->getAttribute('adExtensionStatus');

        return $value;
    }

    /**
     * Sets the adExtensionStatus value.
     *
     * @param AdExtensionStatus|string|null $value New property value.
     * @return $this
     */
    public function setAdExtensionStatus(AdExtensionStatus|string|null $value): self
    {
        $this->setAttribute('adExtensionStatus', $value);

        return $this;
    }

    /**
     * Returns the adExtensionType value.
     *
     * @return AdExtensionType|null
     */
    public function getAdExtensionType(): ?AdExtensionType
    {
        /** @var AdExtensionType|null $value */
        $value = $this->getAttribute('adExtensionType');

        return $value;
    }

    /**
     * Sets the adExtensionType value.
     *
     * @param AdExtensionType|string|null $value New property value.
     * @return $this
     */
    public function setAdExtensionType(AdExtensionType|string|null $value): self
    {
        $this->setAttribute('adExtensionType', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the ad group associated with the ad extension..
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
     * Sets A unique identifier for the ad group associated with the ad extension..
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
     * Returns A unique identifier for the ad associated with the ad extension..
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
     * Sets A unique identifier for the ad associated with the ad extension..
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
     * Returns The list of marketplace in which the global ad extension is applicable. The marketplaces included should either be same as or subset of parent campaign/adGroup/ad..
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
     * Sets The list of marketplace in which the global ad extension is applicable. The marketplaces included should either be same as or subset of parent campaign/adGroup/ad..
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
}
