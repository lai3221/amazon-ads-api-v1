<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryBrandStoreRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryBrandStoreRequest.
 */
final class QueryBrandStoreRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryBrandStoreRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 30,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'storeNameFilter' => [
            'type' => 'model',
            'class' => BrandStoreStoreNameFilter::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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

    /**
     * Returns the storeNameFilter value.
     *
     * @return BrandStoreStoreNameFilter|null
     */
    public function getStoreNameFilter(): ?BrandStoreStoreNameFilter
    {
        /** @var BrandStoreStoreNameFilter|null $value */
        $value = $this->getAttribute('storeNameFilter');

        return $value;
    }

    /**
     * Sets the storeNameFilter value.
     *
     * @param BrandStoreStoreNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreNameFilter(BrandStoreStoreNameFilter|array|null $value): self
    {
        $this->setAttribute('storeNameFilter', $value);

        return $this;
    }
}
