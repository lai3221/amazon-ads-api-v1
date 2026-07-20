<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Pacing schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Pacing.
 */
final class Pacing extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Pacing';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deliveryProfile' => [
            'type' => 'enum',
            'class' => DeliveryProfile::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the deliveryProfile value.
     *
     * @return DeliveryProfile|null
     */
    public function getDeliveryProfile(): ?DeliveryProfile
    {
        /** @var DeliveryProfile|null $value */
        $value = $this->getAttribute('deliveryProfile');

        return $value;
    }

    /**
     * Sets the deliveryProfile value.
     *
     * @param DeliveryProfile|string|null $value New property value.
     * @return $this
     */
    public function setDeliveryProfile(DeliveryProfile|string|null $value): self
    {
        $this->setAttribute('deliveryProfile', $value);

        return $this;
    }
}
