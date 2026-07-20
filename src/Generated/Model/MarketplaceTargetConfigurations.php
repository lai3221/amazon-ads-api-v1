<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MarketplaceTargetConfigurations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MarketplaceTargetConfigurations.
 */
final class MarketplaceTargetConfigurations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MarketplaceTargetConfigurations';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'overrides' => [
            'type' => 'model',
            'class' => MarketplaceTargetFieldOverrides::class,
            'required' => true,
            'nullable' => false,
        ],
        'targetId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

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
     * @return MarketplaceTargetFieldOverrides|null
     */
    public function getOverrides(): ?MarketplaceTargetFieldOverrides
    {
        /** @var MarketplaceTargetFieldOverrides|null $value */
        $value = $this->getAttribute('overrides');

        return $value;
    }

    /**
     * Sets the overrides value.
     *
     * @param MarketplaceTargetFieldOverrides|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOverrides(MarketplaceTargetFieldOverrides|array|null $value): self
    {
        $this->setAttribute('overrides', $value);

        return $this;
    }

    /**
     * Returns Represents marketplace target id (Ex: targetId-US) associated to global target (Ex: targetId-Global)..
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
     * Sets Represents marketplace target id (Ex: targetId-US) associated to global target (Ex: targetId-Global)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTargetId(?string $value): self
    {
        $this->setAttribute('targetId', $value);

        return $this;
    }
}
