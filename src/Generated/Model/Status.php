<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Status schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Status.
 */
final class Status extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Status';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deliveryReasons' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => DeliveryReason::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'deliveryStatus' => [
            'type' => 'enum',
            'class' => DeliveryStatus::class,
            'required' => true,
            'nullable' => false,
        ],
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StatusMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
    ];

    /**
     * Returns This is the list of reasons behind the delivery status..
     *
     * @return list<DeliveryReason>|null
     */
    public function getDeliveryReasons(): ?array
    {
        /** @var list<DeliveryReason>|null $value */
        $value = $this->getAttribute('deliveryReasons');

        return $value;
    }

    /**
     * Sets This is the list of reasons behind the delivery status..
     *
     * @param list<DeliveryReason>|null $value New property value.
     * @return $this
     */
    public function setDeliveryReasons(?array $value): self
    {
        $this->setAttribute('deliveryReasons', $value);

        return $this;
    }

    /**
     * Returns the deliveryStatus value.
     *
     * @return DeliveryStatus|null
     */
    public function getDeliveryStatus(): ?DeliveryStatus
    {
        /** @var DeliveryStatus|null $value */
        $value = $this->getAttribute('deliveryStatus');

        return $value;
    }

    /**
     * Sets the deliveryStatus value.
     *
     * @param DeliveryStatus|string|null $value New property value.
     * @return $this
     */
    public function setDeliveryStatus(DeliveryStatus|string|null $value): self
    {
        $this->setAttribute('deliveryStatus', $value);

        return $this;
    }

    /**
     * Returns The list of marketplace level delivery status and reasons of global resources, for all the marketplaces the global resource is applicable in..
     *
     * @return list<StatusMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<StatusMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets The list of marketplace level delivery status and reasons of global resources, for all the marketplaces the global resource is applicable in..
     *
     * @param list<StatusMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }
}
