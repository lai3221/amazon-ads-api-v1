<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionCodeRedemption schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionCodeRedemption.
 */
final class PromotionCodeRedemption extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionCodeRedemption';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accountId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'promotionCodeId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'promotionCodeRedemptionId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'redemptionResult' => [
            'type' => 'model',
            'class' => RedemptionResult::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The account id for which promotion code redemption is created. Only supports global advertiser account id..
     *
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('accountId');

        return $value;
    }

    /**
     * Sets The account id for which promotion code redemption is created. Only supports global advertiser account id..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAccountId(?string $value): self
    {
        $this->setAttribute('accountId', $value);

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

    /**
     * Returns The promotion code ID associated with the promotion code redemption..
     *
     * @return string|null
     */
    public function getPromotionCodeId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionCodeId');

        return $value;
    }

    /**
     * Sets The promotion code ID associated with the promotion code redemption..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionCodeId(?string $value): self
    {
        $this->setAttribute('promotionCodeId', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the promotion code redemption..
     *
     * @return string|null
     */
    public function getPromotionCodeRedemptionId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionCodeRedemptionId');

        return $value;
    }

    /**
     * Sets The unique identifier of the promotion code redemption..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionCodeRedemptionId(?string $value): self
    {
        $this->setAttribute('promotionCodeRedemptionId', $value);

        return $this;
    }

    /**
     * Returns the redemptionResult value.
     *
     * @return RedemptionResult|null
     */
    public function getRedemptionResult(): ?RedemptionResult
    {
        /** @var RedemptionResult|null $value */
        $value = $this->getAttribute('redemptionResult');

        return $value;
    }

    /**
     * Sets the redemptionResult value.
     *
     * @param RedemptionResult|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setRedemptionResult(RedemptionResult|array|null $value): self
    {
        $this->setAttribute('redemptionResult', $value);

        return $this;
    }
}
