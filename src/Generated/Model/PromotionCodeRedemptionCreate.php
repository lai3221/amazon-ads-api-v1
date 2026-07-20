<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionCodeRedemptionCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionCodeRedemptionCreate.
 */
final class PromotionCodeRedemptionCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionCodeRedemptionCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
    ];

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
}
