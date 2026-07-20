<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SupplierSupplierTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SupplierSupplierTypeFilter.
 */
final class SupplierSupplierTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSupplierTypeFilter';

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
                'class' => SupplierType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 4,
        ],
    ];

    /**
     * Returns Type Enum: Type Description --- --- THIRD PARTY EXCHANGE External SSP/exchange (Magnite, PubMatic, Index Exchange, etc.). AMAZON PUBLISHER SERVICES Amazon Publisher Services - first-party header bidding supply. PUBTECH Amazon PubTech - Amazon-owned O&O publ..
     *
     * @return list<SupplierType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<SupplierType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets Type Enum: Type Description --- --- THIRD PARTY EXCHANGE External SSP/exchange (Magnite, PubMatic, Index Exchange, etc.). AMAZON PUBLISHER SERVICES Amazon Publisher Services - first-party header bidding supply. PUBTECH Amazon PubTech - Amazon-owned O&O publ..
     *
     * @param list<SupplierType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
