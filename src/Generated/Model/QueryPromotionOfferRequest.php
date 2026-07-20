<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryPromotionOfferRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryPromotionOfferRequest.
 */
final class QueryPromotionOfferRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryPromotionOfferRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplaceFilter' => [
            'type' => 'model',
            'class' => PromotionOfferMarketplaceFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'statusFilter' => [
            'type' => 'model',
            'class' => PromotionOfferPromotionOfferStatusFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the marketplaceFilter value.
     *
     * @return PromotionOfferMarketplaceFilter|null
     */
    public function getMarketplaceFilter(): ?PromotionOfferMarketplaceFilter
    {
        /** @var PromotionOfferMarketplaceFilter|null $value */
        $value = $this->getAttribute('marketplaceFilter');

        return $value;
    }

    /**
     * Sets the marketplaceFilter value.
     *
     * @param PromotionOfferMarketplaceFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceFilter(PromotionOfferMarketplaceFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceFilter', $value);

        return $this;
    }

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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
     * Returns the statusFilter value.
     *
     * @return PromotionOfferPromotionOfferStatusFilter|null
     */
    public function getStatusFilter(): ?PromotionOfferPromotionOfferStatusFilter
    {
        /** @var PromotionOfferPromotionOfferStatusFilter|null $value */
        $value = $this->getAttribute('statusFilter');

        return $value;
    }

    /**
     * Sets the statusFilter value.
     *
     * @param PromotionOfferPromotionOfferStatusFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatusFilter(PromotionOfferPromotionOfferStatusFilter|array|null $value): self
    {
        $this->setAttribute('statusFilter', $value);

        return $this;
    }
}
