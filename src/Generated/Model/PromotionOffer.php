<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionOffer schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionOffer.
 */
final class PromotionOffer extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionOffer';

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
        'description' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'fulfilmentCriteria' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => FulfilmentCriterion::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
        ],
        'promotionCampaign' => [
            'type' => 'model',
            'class' => PromotionCampaign::class,
            'required' => true,
            'nullable' => false,
        ],
        'promotionOfferId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'promotionRewardId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => PromotionOfferStatus::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The account id for which the promotion offer is created. Only supports global advertiser account id..
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
     * Sets The account id for which the promotion offer is created. Only supports global advertiser account id..
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
     * Returns Description of the promotion offer..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Description of the promotion offer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns The fulfilment criteria of the promotion offer. Can include up to two criteria: a CampaignLaunchFulfilmentCriterion and a SpendsFulfilmentCriterion. For example, a promotion offer might require launching a Sponsored Products campaign first, and then spendin..
     *
     * @return list<FulfilmentCriterion>|null
     */
    public function getFulfilmentCriteria(): ?array
    {
        /** @var list<FulfilmentCriterion>|null $value */
        $value = $this->getAttribute('fulfilmentCriteria');

        return $value;
    }

    /**
     * Sets The fulfilment criteria of the promotion offer. Can include up to two criteria: a CampaignLaunchFulfilmentCriterion and a SpendsFulfilmentCriterion. For example, a promotion offer might require launching a Sponsored Products campaign first, and then spendin..
     *
     * @param list<FulfilmentCriterion>|null $value New property value.
     * @return $this
     */
    public function setFulfilmentCriteria(?array $value): self
    {
        $this->setAttribute('fulfilmentCriteria', $value);

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
     * Returns the promotionCampaign value.
     *
     * @return PromotionCampaign|null
     */
    public function getPromotionCampaign(): ?PromotionCampaign
    {
        /** @var PromotionCampaign|null $value */
        $value = $this->getAttribute('promotionCampaign');

        return $value;
    }

    /**
     * Sets the promotionCampaign value.
     *
     * @param PromotionCampaign|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPromotionCampaign(PromotionCampaign|array|null $value): self
    {
        $this->setAttribute('promotionCampaign', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the promotion offer..
     *
     * @return string|null
     */
    public function getPromotionOfferId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionOfferId');

        return $value;
    }

    /**
     * Sets The unique identifier of the promotion offer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionOfferId(?string $value): self
    {
        $this->setAttribute('promotionOfferId', $value);

        return $this;
    }

    /**
     * Returns The promotion reward Id associated to the promotion offer..
     *
     * @return string|null
     */
    public function getPromotionRewardId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionRewardId');

        return $value;
    }

    /**
     * Sets The promotion reward Id associated to the promotion offer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardId(?string $value): self
    {
        $this->setAttribute('promotionRewardId', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return PromotionOfferStatus|null
     */
    public function getStatus(): ?PromotionOfferStatus
    {
        /** @var PromotionOfferStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param PromotionOfferStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(PromotionOfferStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
