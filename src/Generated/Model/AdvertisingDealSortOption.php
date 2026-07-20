<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealSortOption schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealSortOption.
 */
final class AdvertisingDealSortOption extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealSortOption';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'by' => [
            'type' => 'enum',
            'class' => AdvertisingDealSortOptionsFields::class,
            'required' => true,
            'nullable' => false,
        ],
        'direction' => [
            'type' => 'enum',
            'class' => SortDirection::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the by value.
     *
     * @return AdvertisingDealSortOptionsFields|null
     */
    public function getBy(): ?AdvertisingDealSortOptionsFields
    {
        /** @var AdvertisingDealSortOptionsFields|null $value */
        $value = $this->getAttribute('by');

        return $value;
    }

    /**
     * Sets the by value.
     *
     * @param AdvertisingDealSortOptionsFields|string|null $value New property value.
     * @return $this
     */
    public function setBy(AdvertisingDealSortOptionsFields|string|null $value): self
    {
        $this->setAttribute('by', $value);

        return $this;
    }

    /**
     * Returns the direction value.
     *
     * @return SortDirection|null
     */
    public function getDirection(): ?SortDirection
    {
        /** @var SortDirection|null $value */
        $value = $this->getAttribute('direction');

        return $value;
    }

    /**
     * Sets the direction value.
     *
     * @param SortDirection|string|null $value New property value.
     * @return $this
     */
    public function setDirection(SortDirection|string|null $value): self
    {
        $this->setAttribute('direction', $value);

        return $this;
    }
}
