<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreSuccessResponse.
 */
final class BrandStoreSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStores' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStore::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the brandStores value.
     *
     * @return list<BrandStore>|null
     */
    public function getBrandStores(): ?array
    {
        /** @var list<BrandStore>|null $value */
        $value = $this->getAttribute('brandStores');

        return $value;
    }

    /**
     * Sets the brandStores value.
     *
     * @param list<BrandStore>|null $value New property value.
     * @return $this
     */
    public function setBrandStores(?array $value): self
    {
        $this->setAttribute('brandStores', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
