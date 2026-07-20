<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleAdProductFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleAdProductFilter.
 */
final class RuleAdProductFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleAdProductFilter';

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
                'class' => AdProduct::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns AdProduct Enum: AdProduct Description --- --- AMAZON DSP Amazon Demand-Side Platform ad product..
     *
     * @return list<AdProduct>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<AdProduct>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets AdProduct Enum: AdProduct Description --- --- AMAZON DSP Amazon Demand-Side Platform ad product..
     *
     * @param list<AdProduct>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
