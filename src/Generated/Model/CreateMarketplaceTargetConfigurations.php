<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMarketplaceTargetConfigurations schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMarketplaceTargetConfigurations.
 */
final class CreateMarketplaceTargetConfigurations extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMarketplaceTargetConfigurations';

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
            'class' => CreateMarketplaceTargetFieldOverrides::class,
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
     * @return CreateMarketplaceTargetFieldOverrides|null
     */
    public function getOverrides(): ?CreateMarketplaceTargetFieldOverrides
    {
        /** @var CreateMarketplaceTargetFieldOverrides|null $value */
        $value = $this->getAttribute('overrides');

        return $value;
    }

    /**
     * Sets the overrides value.
     *
     * @param CreateMarketplaceTargetFieldOverrides|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOverrides(CreateMarketplaceTargetFieldOverrides|array|null $value): self
    {
        $this->setAttribute('overrides', $value);

        return $this;
    }
}
