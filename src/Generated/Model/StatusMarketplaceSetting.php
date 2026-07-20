<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StatusMarketplaceSetting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StatusMarketplaceSetting.
 */
final class StatusMarketplaceSetting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StatusMarketplaceSetting';

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
        'marketplace' => [
            'type' => 'enum',
            'class' => Marketplace::class,
            'required' => true,
            'nullable' => false,
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
}
