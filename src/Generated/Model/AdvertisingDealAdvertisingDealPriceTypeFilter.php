<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealAdvertisingDealPriceTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealAdvertisingDealPriceTypeFilter.
 */
final class AdvertisingDealAdvertisingDealPriceTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealAdvertisingDealPriceTypeFilter';

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
                'class' => AdvertisingDealPriceType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns PriceType Enum: PriceType Description --- --- FIXED PRICE Sale price for a specific ad placement regardless of auction performance. FIXED CPM Fixed cost per thousand impressions. Buyer pays this exact CPM for every impression won. Used for PREFERRED and PRO..
     *
     * @return list<AdvertisingDealPriceType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<AdvertisingDealPriceType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets PriceType Enum: PriceType Description --- --- FIXED PRICE Sale price for a specific ad placement regardless of auction performance. FIXED CPM Fixed cost per thousand impressions. Buyer pays this exact CPM for every impression won. Used for PREFERRED and PRO..
     *
     * @param list<AdvertisingDealPriceType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
