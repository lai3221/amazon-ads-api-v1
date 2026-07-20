<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreShopTheLookSearch schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreShopTheLookSearch.
 */
final class CreateStoreShopTheLookSearch extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreShopTheLookSearch';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'includeOutOfStock' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'keyword' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'node' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns Whether to include out of stock items in search..
     *
     * @return bool|null
     */
    public function getIncludeOutOfStock(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('includeOutOfStock');

        return $value;
    }

    /**
     * Sets Whether to include out of stock items in search..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIncludeOutOfStock(?bool $value): self
    {
        $this->setAttribute('includeOutOfStock', $value);

        return $this;
    }

    /**
     * Returns Search keyword..
     *
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('keyword');

        return $value;
    }

    /**
     * Sets Search keyword..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setKeyword(?string $value): self
    {
        $this->setAttribute('keyword', $value);

        return $this;
    }

    /**
     * Returns Node identifier for search..
     *
     * @return string|null
     */
    public function getNode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('node');

        return $value;
    }

    /**
     * Sets Node identifier for search..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNode(?string $value): self
    {
        $this->setAttribute('node', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for search filtering..
     *
     * @return list<string>|null
     */
    public function getProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('productAsins');

        return $value;
    }

    /**
     * Sets Single ASIN for search filtering..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setProductAsins(?array $value): self
    {
        $this->setAttribute('productAsins', $value);

        return $this;
    }
}
