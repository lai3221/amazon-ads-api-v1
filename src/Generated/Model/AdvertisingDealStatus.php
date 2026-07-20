<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealStatus schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealStatus.
 */
final class AdvertisingDealStatus extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealStatus';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'status' => [
            'type' => 'enum',
            'class' => AdvertisingDealStatusEnum::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the status value.
     *
     * @return AdvertisingDealStatusEnum|null
     */
    public function getStatus(): ?AdvertisingDealStatusEnum
    {
        /** @var AdvertisingDealStatusEnum|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param AdvertisingDealStatusEnum|string|null $value New property value.
     * @return $this
     */
    public function setStatus(AdvertisingDealStatusEnum|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
