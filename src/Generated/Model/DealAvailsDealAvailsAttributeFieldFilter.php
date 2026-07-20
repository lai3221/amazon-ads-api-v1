<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealAvailsDealAvailsAttributeFieldFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealAvailsDealAvailsAttributeFieldFilter.
 */
final class DealAvailsDealAvailsAttributeFieldFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealAvailsDealAvailsAttributeFieldFilter';

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
                'class' => DealAvailsAttributeField::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 8,
        ],
    ];

    /**
     * Returns GroupByAttributes Enum: GroupByAttributes Description --- --- INVENTORY TYPE Break down by inventory type (e.g. display, video, audio). CREATIVE SIZE Break down by creative size (width x height in DIPS). SUPPLIER SELLER Break down by supplier seller. AUDIEN..
     *
     * @return list<DealAvailsAttributeField>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<DealAvailsAttributeField>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets GroupByAttributes Enum: GroupByAttributes Description --- --- INVENTORY TYPE Break down by inventory type (e.g. display, video, audio). CREATIVE SIZE Break down by creative size (width x height in DIPS). SUPPLIER SELLER Break down by supplier seller. AUDIEN..
     *
     * @param list<DealAvailsAttributeField>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
