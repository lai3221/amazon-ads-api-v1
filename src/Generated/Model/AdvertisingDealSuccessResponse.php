<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealSuccessResponse.
 */
final class AdvertisingDealSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertisingDeals' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertisingDeal::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'totalResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertisingDeals value.
     *
     * @return list<AdvertisingDeal>|null
     */
    public function getAdvertisingDeals(): ?array
    {
        /** @var list<AdvertisingDeal>|null $value */
        $value = $this->getAttribute('advertisingDeals');

        return $value;
    }

    /**
     * Sets the advertisingDeals value.
     *
     * @param list<AdvertisingDeal>|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDeals(?array $value): self
    {
        $this->setAttribute('advertisingDeals', $value);

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
