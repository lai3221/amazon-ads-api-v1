<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStore schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStore.
 */
final class BrandStore extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStore';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'pageInfos' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStorePageInfo::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'storeId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'storeName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Collection of BrandStorePageInfo for all pages tied to the brand store..
     *
     * @return list<BrandStorePageInfo>|null
     */
    public function getPageInfos(): ?array
    {
        /** @var list<BrandStorePageInfo>|null $value */
        $value = $this->getAttribute('pageInfos');

        return $value;
    }

    /**
     * Sets Collection of BrandStorePageInfo for all pages tied to the brand store..
     *
     * @param list<BrandStorePageInfo>|null $value New property value.
     * @return $this
     */
    public function setPageInfos(?array $value): self
    {
        $this->setAttribute('pageInfos', $value);

        return $this;
    }

    /**
     * Returns Unique identifier for the store..
     *
     * @return string|null
     */
    public function getStoreId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('storeId');

        return $value;
    }

    /**
     * Sets Unique identifier for the store..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStoreId(?string $value): self
    {
        $this->setAttribute('storeId', $value);

        return $this;
    }

    /**
     * Returns The name of the store..
     *
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('storeName');

        return $value;
    }

    /**
     * Sets The name of the store..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStoreName(?string $value): self
    {
        $this->setAttribute('storeName', $value);

        return $this;
    }
}
