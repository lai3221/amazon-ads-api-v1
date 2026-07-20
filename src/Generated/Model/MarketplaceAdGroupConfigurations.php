<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MarketplaceAdGroupConfigurations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MarketplaceAdGroupConfigurations.
 */
final class MarketplaceAdGroupConfigurations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MarketplaceAdGroupConfigurations';

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
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'overrides' => [
            'type' => 'model',
            'class' => MarketplaceAdGroupFieldOverrides::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Represents marketplace adGroup id (Ex: adGroupId-US) associated to global adGroup (Ex: adGroupId-Global)..
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
     * Sets Represents marketplace adGroup id (Ex: adGroupId-US) associated to global adGroup (Ex: adGroupId-Global)..
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
     * Returns the marketplace value.
     *
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('marketplace');

        return $value;
    }

    /**
     * Sets the marketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('marketplace', $value);

        return $this;
    }

    /**
     * Returns the overrides value.
     *
     * @return MarketplaceAdGroupFieldOverrides|null
     */
    public function getOverrides(): ?MarketplaceAdGroupFieldOverrides
    {
        /** @var MarketplaceAdGroupFieldOverrides|null $value */
        $value = $this->getAttribute('overrides');

        return $value;
    }

    /**
     * Sets the overrides value.
     *
     * @param MarketplaceAdGroupFieldOverrides|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOverrides(MarketplaceAdGroupFieldOverrides|array|null $value): self
    {
        $this->setAttribute('overrides', $value);

        return $this;
    }
}
