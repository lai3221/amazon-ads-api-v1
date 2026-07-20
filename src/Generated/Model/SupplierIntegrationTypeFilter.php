<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SupplierIntegrationTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SupplierIntegrationTypeFilter.
 */
final class SupplierIntegrationTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierIntegrationTypeFilter';

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
                'class' => IntegrationType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns IntegrationType Enum: IntegrationType Description --- --- DIRECT Supplier is directly integrated with ADSP via OpenRTB. BIDSWITCH Supplier routes inventory through BidSwitch as an intermediary..
     *
     * @return list<IntegrationType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<IntegrationType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets IntegrationType Enum: IntegrationType Description --- --- DIRECT Supplier is directly integrated with ADSP via OpenRTB. BIDSWITCH Supplier routes inventory through BidSwitch as an intermediary..
     *
     * @param list<IntegrationType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
