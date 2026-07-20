<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupBidMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupBidMarketplaceSetting.
 */
final class AdGroupBidMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupBidMarketplaceSetting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'defaultBid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the currencyCode value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyCode');

        return $value;
    }

    /**
     * Sets the currencyCode value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyCode(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyCode', $value);

        return $this;
    }

    /**
     * Returns The default maximum bid for ads and targets in the ad group. This is used in sponsored ads as the maximum bid during the auction..
     *
     * @return int|float|null
     */
    public function getDefaultBid(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('defaultBid');

        return $value;
    }

    /**
     * Sets The default maximum bid for ads and targets in the ad group. This is used in sponsored ads as the maximum bid during the auction..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setDefaultBid(int|float|null $value): self
    {
        $this->setAttribute('defaultBid', $value);

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
}
