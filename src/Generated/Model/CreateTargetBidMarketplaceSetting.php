<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTargetBidMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTargetBidMarketplaceSetting.
 */
final class CreateTargetBidMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTargetBidMarketplaceSetting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => true,
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
     * Returns The maximum bid for a target..
     *
     * @return int|float|null
     */
    public function getBid(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets The maximum bid for a target..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setBid(int|float|null $value): self
    {
        $this->setAttribute('bid', $value);

        return $this;
    }

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
