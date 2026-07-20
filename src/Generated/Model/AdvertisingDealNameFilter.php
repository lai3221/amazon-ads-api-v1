<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealNameFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealNameFilter.
 */
final class AdvertisingDealNameFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealNameFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'queryTermMatchType' => [
            'type' => 'enum',
            'class' => AdvertisingDealNameFilterType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<string>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }

    /**
     * Returns the queryTermMatchType value.
     *
     * @return AdvertisingDealNameFilterType|null
     */
    public function getQueryTermMatchType(): ?AdvertisingDealNameFilterType
    {
        /** @var AdvertisingDealNameFilterType|null $value */
        $value = $this->getAttribute('queryTermMatchType');

        return $value;
    }

    /**
     * Sets the queryTermMatchType value.
     *
     * @param AdvertisingDealNameFilterType|string|null $value New property value.
     * @return $this
     */
    public function setQueryTermMatchType(AdvertisingDealNameFilterType|string|null $value): self
    {
        $this->setAttribute('queryTermMatchType', $value);

        return $this;
    }
}
