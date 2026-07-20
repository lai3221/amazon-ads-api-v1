<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealEndDateTimeRangeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealEndDateTimeRangeFilter.
 */
final class AdvertisingDealEndDateTimeRangeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealEndDateTimeRangeFilter';

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
                'class' => DateTimeRange::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<DateTimeRange>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<DateTimeRange>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<DateTimeRange>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
