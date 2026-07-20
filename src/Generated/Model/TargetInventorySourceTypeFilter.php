<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetInventorySourceTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetInventorySourceTypeFilter.
 */
final class TargetInventorySourceTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetInventorySourceTypeFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => InventorySourceType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns InventorySourceType Enum: InventorySourceType Description --- --- AMAZON Amazon-owned inventory. APD Amazon Publisher Direct inventory. THIRD PARTY EXCHANGE Third-party exchange inventory. DEAL Deal-based inventory. INVENTORY GROUP A group representing a se..
     *
     * @return list<InventorySourceType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<InventorySourceType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets InventorySourceType Enum: InventorySourceType Description --- --- AMAZON Amazon-owned inventory. APD Amazon Publisher Direct inventory. THIRD PARTY EXCHANGE Third-party exchange inventory. DEAL Deal-based inventory. INVENTORY GROUP A group representing a se..
     *
     * @param list<InventorySourceType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
