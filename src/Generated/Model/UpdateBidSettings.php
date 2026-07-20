<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateBidSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateBidSettings.
 */
final class UpdateBidSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateBidSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bidAdjustments' => [
            'type' => 'model',
            'class' => UpdateBidAdjustments::class,
            'required' => false,
            'nullable' => false,
        ],
        'bidStrategy' => [
            'type' => 'enum',
            'class' => BidStrategy::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the bidAdjustments value.
     *
     * @return UpdateBidAdjustments|null
     */
    public function getBidAdjustments(): ?UpdateBidAdjustments
    {
        /** @var UpdateBidAdjustments|null $value */
        $value = $this->getAttribute('bidAdjustments');

        return $value;
    }

    /**
     * Sets the bidAdjustments value.
     *
     * @param UpdateBidAdjustments|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBidAdjustments(UpdateBidAdjustments|array|null $value): self
    {
        $this->setAttribute('bidAdjustments', $value);

        return $this;
    }

    /**
     * Returns the bidStrategy value.
     *
     * @return BidStrategy|null
     */
    public function getBidStrategy(): ?BidStrategy
    {
        /** @var BidStrategy|null $value */
        $value = $this->getAttribute('bidStrategy');

        return $value;
    }

    /**
     * Sets the bidStrategy value.
     *
     * @param BidStrategy|string|null $value New property value.
     * @return $this
     */
    public function setBidStrategy(BidStrategy|string|null $value): self
    {
        $this->setAttribute('bidStrategy', $value);

        return $this;
    }
}
