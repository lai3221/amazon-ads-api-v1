<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionAdExtensionStatusFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionAdExtensionStatusFilter.
 */
final class AdExtensionAdExtensionStatusFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionAdExtensionStatusFilter';

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
                'class' => AdExtensionStatus::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns AdExtensionStatus Enum: AdExtensionStatus Description --- --- OPTED OUT If the advertiser has opted out of this Ad Extension..
     *
     * @return list<AdExtensionStatus>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<AdExtensionStatus>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets AdExtensionStatus Enum: AdExtensionStatus Description --- --- OPTED OUT If the advertiser has opted out of this Ad Extension..
     *
     * @param list<AdExtensionStatus>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
