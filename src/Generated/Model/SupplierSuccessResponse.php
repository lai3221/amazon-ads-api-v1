<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SupplierSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SupplierSuccessResponse.
 */
final class SupplierSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SupplierSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'suppliers' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Supplier::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'totalResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the suppliers value.
     *
     * @return list<Supplier>|null
     */
    public function getSuppliers(): ?array
    {
        /** @var list<Supplier>|null $value */
        $value = $this->getAttribute('suppliers');

        return $value;
    }

    /**
     * Sets the suppliers value.
     *
     * @param list<Supplier>|null $value New property value.
     * @return $this
     */
    public function setSuppliers(?array $value): self
    {
        $this->setAttribute('suppliers', $value);

        return $this;
    }

    /**
     * Returns the totalResults value.
     *
     * @return int|null
     */
    public function getTotalResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('totalResults');

        return $value;
    }

    /**
     * Sets the totalResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTotalResults(?int $value): self
    {
        $this->setAttribute('totalResults', $value);

        return $this;
    }
}
