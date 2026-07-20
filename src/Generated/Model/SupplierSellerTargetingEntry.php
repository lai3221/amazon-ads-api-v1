<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A supplier seller targeting entry. All entries must share the same negative value.
 *
 * @generated from Amazon Ads API v1 schema SupplierSellerTargetingEntry.
 */
final class SupplierSellerTargetingEntry extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSellerTargetingEntry';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'groupId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'negative' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'supplierSellerId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('groupId');

        return $value;
    }

    /**
     * Sets Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGroupId(?string $value): self
    {
        $this->setAttribute('groupId', $value);

        return $this;
    }

    /**
     * Returns When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

        return $this;
    }

    /**
     * Returns The supplier seller to target..
     *
     * @return string|null
     */
    public function getSupplierSellerId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('supplierSellerId');

        return $value;
    }

    /**
     * Sets The supplier seller to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSupplierSellerId(?string $value): self
    {
        $this->setAttribute('supplierSellerId', $value);

        return $this;
    }
}
