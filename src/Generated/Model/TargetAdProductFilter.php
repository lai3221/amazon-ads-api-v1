<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetAdProductFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetAdProductFilter.
 */
final class TargetAdProductFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetAdProductFilter';

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
     * Returns AdProduct Enum: AdProduct Description --- --- SPONSORED PRODUCTS Sponsored Products ad product. SPONSORED BRANDS Sponsored Brands ad product. SPONSORED DISPLAY Sponsored Display ad product. SPONSORED TELEVISION Sponsored Television ad product. AMAZON DSP Am..
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
     * Sets AdProduct Enum: AdProduct Description --- --- SPONSORED PRODUCTS Sponsored Products ad product. SPONSORED BRANDS Sponsored Brands ad product. SPONSORED DISPLAY Sponsored Display ad product. SPONSORED TELEVISION Sponsored Television ad product. AMAZON DSP Am..
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
