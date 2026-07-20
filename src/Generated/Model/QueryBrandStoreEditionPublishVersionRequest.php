<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryBrandStoreEditionPublishVersionRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryBrandStoreEditionPublishVersionRequest.
 */
final class QueryBrandStoreEditionPublishVersionRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryBrandStoreEditionPublishVersionRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'editionIdFilter' => [
            'type' => 'model',
            'class' => BrandStoreEditionPublishVersionBrandStoreEditionIdFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 50,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'publishStatusFilter' => [
            'type' => 'model',
            'class' => BrandStoreEditionPublishVersionStorePublishStatusFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'storeIdFilter' => [
            'type' => 'model',
            'class' => BrandStoreEditionPublishVersionBrandStoreIdFilter::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the editionIdFilter value.
     *
     * @return BrandStoreEditionPublishVersionBrandStoreEditionIdFilter|null
     */
    public function getEditionIdFilter(): ?BrandStoreEditionPublishVersionBrandStoreEditionIdFilter
    {
        /** @var BrandStoreEditionPublishVersionBrandStoreEditionIdFilter|null $value */
        $value = $this->getAttribute('editionIdFilter');

        return $value;
    }

    /**
     * Sets the editionIdFilter value.
     *
     * @param BrandStoreEditionPublishVersionBrandStoreEditionIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEditionIdFilter(BrandStoreEditionPublishVersionBrandStoreEditionIdFilter|array|null $value): self
    {
        $this->setAttribute('editionIdFilter', $value);

        return $this;
    }

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
     * Returns the publishStatusFilter value.
     *
     * @return BrandStoreEditionPublishVersionStorePublishStatusFilter|null
     */
    public function getPublishStatusFilter(): ?BrandStoreEditionPublishVersionStorePublishStatusFilter
    {
        /** @var BrandStoreEditionPublishVersionStorePublishStatusFilter|null $value */
        $value = $this->getAttribute('publishStatusFilter');

        return $value;
    }

    /**
     * Sets the publishStatusFilter value.
     *
     * @param BrandStoreEditionPublishVersionStorePublishStatusFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPublishStatusFilter(BrandStoreEditionPublishVersionStorePublishStatusFilter|array|null $value): self
    {
        $this->setAttribute('publishStatusFilter', $value);

        return $this;
    }

    /**
     * Returns the storeIdFilter value.
     *
     * @return BrandStoreEditionPublishVersionBrandStoreIdFilter|null
     */
    public function getStoreIdFilter(): ?BrandStoreEditionPublishVersionBrandStoreIdFilter
    {
        /** @var BrandStoreEditionPublishVersionBrandStoreIdFilter|null $value */
        $value = $this->getAttribute('storeIdFilter');

        return $value;
    }

    /**
     * Sets the storeIdFilter value.
     *
     * @param BrandStoreEditionPublishVersionBrandStoreIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreIdFilter(BrandStoreEditionPublishVersionBrandStoreIdFilter|array|null $value): self
    {
        $this->setAttribute('storeIdFilter', $value);

        return $this;
    }
}
