<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAdGroupBid schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAdGroupBid.
 */
final class UpdateAdGroupBid extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdGroupBid';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'baseBid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'defaultBid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateAdGroupBidMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'maxAverageBid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => true,
        ],
    ];

    /**
     * Returns The lower bound bid used for the ads in the ad group..
     *
     * @return int|float|null
     */
    public function getBaseBid(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('baseBid');

        return $value;
    }

    /**
     * Sets The lower bound bid used for the ads in the ad group..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setBaseBid(int|float|null $value): self
    {
        $this->setAttribute('baseBid', $value);

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
     * Returns The bid associated with the ad group at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @return list<CreateAdGroupBidMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<CreateAdGroupBidMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets The bid associated with the ad group at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @param list<CreateAdGroupBidMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }

    /**
     * Returns The max average bid that will be targeted on the ad group across all of the bids (a single bid could be lower or higher that this number)..
     *
     * @return int|float|null
     */
    public function getMaxAverageBid(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('maxAverageBid');

        return $value;
    }

    /**
     * Sets The max average bid that will be targeted on the ad group across all of the bids (a single bid could be lower or higher that this number)..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setMaxAverageBid(int|float|null $value): self
    {
        $this->setAttribute('maxAverageBid', $value);

        return $this;
    }
}
