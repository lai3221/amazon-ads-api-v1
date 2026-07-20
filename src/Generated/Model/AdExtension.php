<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtension schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtension.
 */
final class AdExtension extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtension';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtensionId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'adExtensionSettings' => [
            'type' => 'model',
            'class' => AdExtensionSettings::class,
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
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'lastUpdatedDateTime' => [
            'type' => 'datetime',
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
    ];

    /**
     * Returns A unique identifier for the ad extension..
     *
     * @return string|null
     */
    public function getAdExtensionId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('adExtensionId');

        return $value;
    }

    /**
     * Sets A unique identifier for the ad extension..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdExtensionId(?string $value): self
    {
        $this->setAttribute('adExtensionId', $value);

        return $this;
    }

    /**
     * Returns the adExtensionSettings value.
     *
     * @return AdExtensionSettings|null
     */
    public function getAdExtensionSettings(): ?AdExtensionSettings
    {
        /** @var AdExtensionSettings|null $value */
        $value = $this->getAttribute('adExtensionSettings');

        return $value;
    }

    /**
     * Sets the adExtensionSettings value.
     *
     * @param AdExtensionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtensionSettings(AdExtensionSettings|array|null $value): self
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
     * Returns The date time the ad extension was created..
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
     * Sets The date time the ad extension was created..
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
     * Returns The date time the ad extension was last updated..
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
     * Sets The date time the ad extension was last updated..
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
}
