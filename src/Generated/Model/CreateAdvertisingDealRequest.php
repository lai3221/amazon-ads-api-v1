<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdvertisingDealRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdvertisingDealRequest.
 */
final class CreateAdvertisingDealRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdvertisingDealRequest';

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
                'class' => AdvertisingDealCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the advertisingDeals value.
     *
     * @return list<AdvertisingDealCreate>|null
     */
    public function getAdvertisingDeals(): ?array
    {
        /** @var list<AdvertisingDealCreate>|null $value */
        $value = $this->getAttribute('advertisingDeals');

        return $value;
    }

    /**
     * Sets the advertisingDeals value.
     *
     * @param list<AdvertisingDealCreate>|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDeals(?array $value): self
    {
        $this->setAttribute('advertisingDeals', $value);

        return $this;
    }
}
