<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Seller schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Seller.
 */
final class Seller extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Seller';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'isActive' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'isConfidential' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'sellerId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'sellerParentId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Whether this seller is currently active..
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isActive');

        return $value;
    }

    /**
     * Sets Whether this seller is currently active..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsActive(?bool $value): self
    {
        $this->setAttribute('isActive', $value);

        return $this;
    }

    /**
     * Returns Whether identity is confidential per IAB sellers.json..
     *
     * @return bool|null
     */
    public function getIsConfidential(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isConfidential');

        return $value;
    }

    /**
     * Sets Whether identity is confidential per IAB sellers.json..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsConfidential(?bool $value): self
    {
        $this->setAttribute('isConfidential', $value);

        return $this;
    }

    /**
     * Returns Display name. Normalized across all advertising systems. NULL when isConfidential is true..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets Display name. Normalized across all advertising systems. NULL when isConfidential is true..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the seller (Long serialized as String)..
     *
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('sellerId');

        return $value;
    }

    /**
     * Sets The unique identifier of the seller (Long serialized as String)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSellerId(?string $value): self
    {
        $this->setAttribute('sellerId', $value);

        return $this;
    }

    /**
     * Returns The identifier of the parent holding company that owns this seller..
     *
     * @return string|null
     */
    public function getSellerParentId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('sellerParentId');

        return $value;
    }

    /**
     * Sets The identifier of the parent holding company that owns this seller..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSellerParentId(?string $value): self
    {
        $this->setAttribute('sellerParentId', $value);

        return $this;
    }
}
