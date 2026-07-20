<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAdvertisingDealRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAdvertisingDealRequest.
 */
final class UpdateAdvertisingDealRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdvertisingDealRequest';

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
                'class' => AdvertisingDealUpdate::class,
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
     * @return list<AdvertisingDealUpdate>|null
     */
    public function getAdvertisingDeals(): ?array
    {
        /** @var list<AdvertisingDealUpdate>|null $value */
        $value = $this->getAttribute('advertisingDeals');

        return $value;
    }

    /**
     * Sets the advertisingDeals value.
     *
     * @param list<AdvertisingDealUpdate>|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDeals(?array $value): self
    {
        $this->setAttribute('advertisingDeals', $value);

        return $this;
    }
}
