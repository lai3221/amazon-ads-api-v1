<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateBidAdjustments schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateBidAdjustments.
 */
final class CreateBidAdjustments extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateBidAdjustments';

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
                'class' => CreateAudienceBidAdjustment::class,
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
                'class' => CreateCreativeBidAdjustment::class,
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
                'class' => CreatePlacementBidAdjustment::class,
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
                'class' => CreateShopperSegmentBidAdjustment::class,
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
     * @return list<CreateAudienceBidAdjustment>|null
     */
    public function getAudienceBidAdjustments(): ?array
    {
        /** @var list<CreateAudienceBidAdjustment>|null $value */
        $value = $this->getAttribute('audienceBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid Adjustments based on the audiences..
     *
     * @param list<CreateAudienceBidAdjustment>|null $value New property value.
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
     * @return list<CreateCreativeBidAdjustment>|null
     */
    public function getCreativeBidAdjustments(): ?array
    {
        /** @var list<CreateCreativeBidAdjustment>|null $value */
        $value = $this->getAttribute('creativeBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid Adjustments based on ads being shown as a creative. Range of bid adjustment value would be 0:900..
     *
     * @param list<CreateCreativeBidAdjustment>|null $value New property value.
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
     * @return list<CreatePlacementBidAdjustment>|null
     */
    public function getPlacementBidAdjustments(): ?array
    {
        /** @var list<CreatePlacementBidAdjustment>|null $value */
        $value = $this->getAttribute('placementBidAdjustments');

        return $value;
    }

    /**
     * Sets Bid adjustments based on ad placements. Not supported for Sponsored Brands campaigns using the SALES UP AND DOWN bid strategy..
     *
     * @param list<CreatePlacementBidAdjustment>|null $value New property value.
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
     * @return list<CreateShopperSegmentBidAdjustment>|null
     */
    public function getShopperSegmentBidAdjustments(): ?array
    {
        /** @var list<CreateShopperSegmentBidAdjustment>|null $value */
        $value = $this->getAttribute('shopperSegmentBidAdjustments');

        return $value;
    }

    /**
     * Sets Legacy SB field (marked for deprecation)..
     *
     * @param list<CreateShopperSegmentBidAdjustment>|null $value New property value.
     * @return $this
     */
    public function setShopperSegmentBidAdjustments(?array $value): self
    {
        $this->setAttribute('shopperSegmentBidAdjustments', $value);

        return $this;
    }
}
