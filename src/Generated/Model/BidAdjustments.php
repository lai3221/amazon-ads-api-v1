<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BidAdjustments schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BidAdjustments.
 */
final class BidAdjustments extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BidAdjustments';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'audienceBidAdjustments' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AudienceBidAdjustment::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'creativeBidAdjustments' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreativeBidAdjustment::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'placementBidAdjustments' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PlacementBidAdjustment::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 4,
        ],
        'shopperSegmentBidAdjustments' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ShopperSegmentBidAdjustment::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns Bid Adjustments based on the audiences..
     *
     * @return list<AudienceBidAdjustment>|null
     */
    public function getAudienceBidAdjustments(): ?array
    {
        /** @var list<AudienceBidAdjustment>|null $value */
        $value = $this->getAttribute('audienceBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid Adjustments based on the audiences..
     *
     * @param list<AudienceBidAdjustment>|null $value New property value.
     * @return $this
     */
    public function setAudienceBidAdjustments(?array $value): self
    {
        $this->setAttribute('audienceBidAdjustments', $value);

        return $this;
    }

    /**
     * Returns Bid Adjustments based on ads being shown as a creative. Range of bid adjustment value would be 0:900..
     *
     * @return list<CreativeBidAdjustment>|null
     */
    public function getCreativeBidAdjustments(): ?array
    {
        /** @var list<CreativeBidAdjustment>|null $value */
        $value = $this->getAttribute('creativeBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid Adjustments based on ads being shown as a creative. Range of bid adjustment value would be 0:900..
     *
     * @param list<CreativeBidAdjustment>|null $value New property value.
     * @return $this
     */
    public function setCreativeBidAdjustments(?array $value): self
    {
        $this->setAttribute('creativeBidAdjustments', $value);

        return $this;
    }

    /**
     * Returns Bid adjustments based on ad placements. Not supported for Sponsored Brands campaigns using the SALES UP AND DOWN bid strategy..
     *
     * @return list<PlacementBidAdjustment>|null
     */
    public function getPlacementBidAdjustments(): ?array
    {
        /** @var list<PlacementBidAdjustment>|null $value */
        $value = $this->getAttribute('placementBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid adjustments based on ad placements. Not supported for Sponsored Brands campaigns using the SALES UP AND DOWN bid strategy..
     *
     * @param list<PlacementBidAdjustment>|null $value New property value.
     * @return $this
     */
    public function setPlacementBidAdjustments(?array $value): self
    {
        $this->setAttribute('placementBidAdjustments', $value);

        return $this;
    }

    /**
     * Returns Legacy SB field (marked for deprecation)..
     *
     * @return list<ShopperSegmentBidAdjustment>|null
     */
    public function getShopperSegmentBidAdjustments(): ?array
    {
        /** @var list<ShopperSegmentBidAdjustment>|null $value */
        $value = $this->getAttribute('shopperSegmentBidAdjustments');

        return $value;
    }

    /**
     * Sets Legacy SB field (marked for deprecation)..
     *
     * @param list<ShopperSegmentBidAdjustment>|null $value New property value.
     * @return $this
     */
    public function setShopperSegmentBidAdjustments(?array $value): self
    {
        $this->setAttribute('shopperSegmentBidAdjustments', $value);

        return $this;
    }
}
