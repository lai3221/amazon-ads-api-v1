<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the source of the inventory.
 *
 * @generated from Amazon Ads API v1 schema CreateInventorySourceTarget.
 */
final class CreateInventorySourceTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateInventorySourceTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'inventorySourceId' => [
            'type' => 'model',
            'class' => CreateMarketplaceStringValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'inventorySourceType' => [
            'type' => 'enum',
            'class' => InventorySourceType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the inventorySourceId value.
     *
     * @return CreateMarketplaceStringValue|null
     */
    public function getInventorySourceId(): ?CreateMarketplaceStringValue
    {
        /** @var CreateMarketplaceStringValue|null $value */
        $value = $this->getAttribute('inventorySourceId');

        return $value;
    }

    /**
     * Sets the inventorySourceId value.
     *
     * @param CreateMarketplaceStringValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setInventorySourceId(CreateMarketplaceStringValue|array|null $value): self
    {
        $this->setAttribute('inventorySourceId', $value);

        return $this;
    }

    /**
     * Returns the inventorySourceType value.
     *
     * @return InventorySourceType|null
     */
    public function getInventorySourceType(): ?InventorySourceType
    {
        /** @var InventorySourceType|null $value */
        $value = $this->getAttribute('inventorySourceType');

        return $value;
    }

    /**
     * Sets the inventorySourceType value.
     *
     * @param InventorySourceType|string|null $value New property value.
     * @return $this
     */
    public function setInventorySourceType(InventorySourceType|string|null $value): self
    {
        $this->setAttribute('inventorySourceType', $value);

        return $this;
    }
}
