<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetBid schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetBid.
 */
final class TargetBid extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetBid';

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
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => TargetBidMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
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
     * Returns The bid associated with the target at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @return list<TargetBidMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<TargetBidMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets The bid associated with the target at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @param list<TargetBidMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }
}
