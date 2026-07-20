<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ShopperSegmentBidAdjustment schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ShopperSegmentBidAdjustment.
 */
final class ShopperSegmentBidAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ShopperSegmentBidAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'percentage' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
        'shopperSegment' => [
            'type' => 'enum',
            'class' => ShopperSegment::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The selection of the percentage change associated with a given shopper segment and bid adjustment settings..
     *
     * @return int|null
     */
    public function getPercentage(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('percentage');

        return $value;
    }

    /**
     * Sets The selection of the percentage change associated with a given shopper segment and bid adjustment settings..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setPercentage(?int $value): self
    {
        $this->setAttribute('percentage', $value);

        return $this;
    }

    /**
     * Returns the shopperSegment value.
     *
     * @return ShopperSegment|null
     */
    public function getShopperSegment(): ?ShopperSegment
    {
        /** @var ShopperSegment|null $value */
        $value = $this->getAttribute('shopperSegment');

        return $value;
    }

    /**
     * Sets the shopperSegment value.
     *
     * @param ShopperSegment|string|null $value New property value.
     * @return $this
     */
    public function setShopperSegment(ShopperSegment|string|null $value): self
    {
        $this->setAttribute('shopperSegment', $value);

        return $this;
    }
}
