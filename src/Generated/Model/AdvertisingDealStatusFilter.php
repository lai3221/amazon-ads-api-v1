<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealStatusFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealStatusFilter.
 */
final class AdvertisingDealStatusFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealStatusFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertisingDealStatus::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<AdvertisingDealStatus>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<AdvertisingDealStatus>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<AdvertisingDealStatus>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
