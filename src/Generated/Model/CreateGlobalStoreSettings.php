<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateGlobalStoreSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateGlobalStoreSettings.
 */
final class CreateGlobalStoreSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateGlobalStoreSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'catalogSourceMarketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the catalogSourceMarketplace value.
     *
     * @return Marketplace|null
     */
    public function getCatalogSourceMarketplace(): ?Marketplace
    {
        /** @var Marketplace|null $value */
        $value = $this->getAttribute('catalogSourceMarketplace');

        return $value;
    }

    /**
     * Sets the catalogSourceMarketplace value.
     *
     * @param Marketplace|string|null $value New property value.
     * @return $this
     */
    public function setCatalogSourceMarketplace(Marketplace|string|null $value): self
    {
        $this->setAttribute('catalogSourceMarketplace', $value);

        return $this;
    }
}
