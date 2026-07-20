<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionOfferSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionOfferSuccessResponse.
 */
final class PromotionOfferSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionOfferSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentLanguage' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'promotionOffers' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PromotionOffer::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'totalResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the contentLanguage value.
     *
     * @return string|null
     */
    public function getContentLanguage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('contentLanguage');

        return $value;
    }

    /**
     * Sets the contentLanguage value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setContentLanguage(?string $value): self
    {
        $this->setAttribute('contentLanguage', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }

    /**
     * Returns the promotionOffers value.
     *
     * @return list<PromotionOffer>|null
     */
    public function getPromotionOffers(): ?array
    {
        /** @var list<PromotionOffer>|null $value */
        $value = $this->getAttribute('promotionOffers');

        return $value;
    }

    /**
     * Sets the promotionOffers value.
     *
     * @param list<PromotionOffer>|null $value New property value.
     * @return $this
     */
    public function setPromotionOffers(?array $value): self
    {
        $this->setAttribute('promotionOffers', $value);

        return $this;
    }

    /**
     * Returns the totalResults value.
     *
     * @return int|null
     */
    public function getTotalResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('totalResults');

        return $value;
    }

    /**
     * Sets the totalResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTotalResults(?int $value): self
    {
        $this->setAttribute('totalResults', $value);

        return $this;
    }
}
