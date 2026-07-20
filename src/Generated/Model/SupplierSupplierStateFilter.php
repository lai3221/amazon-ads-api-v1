<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SupplierSupplierStateFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SupplierSupplierStateFilter.
 */
final class SupplierSupplierStateFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSupplierStateFilter';

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
                'class' => SupplierState::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 4,
        ],
    ];

    /**
     * Returns State Enum: State Description --- --- CREATED Supplier record created but not yet in testing. TESTING Integration is in testing or onboarding phase. ACTIVE Supplier is live and sending production traffic to ADSP. INACTIVE Supplier integration has been disab..
     *
     * @return list<SupplierState>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<SupplierState>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets State Enum: State Description --- --- CREATED Supplier record created but not yet in testing. TESTING Integration is in testing or onboarding phase. ACTIVE Supplier is live and sending production traffic to ADSP. INACTIVE Supplier integration has been disab..
     *
     * @param list<SupplierState>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
