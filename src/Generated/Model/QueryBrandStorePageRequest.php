<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryBrandStorePageRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryBrandStorePageRequest.
 */
final class QueryBrandStorePageRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryBrandStorePageRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'editionIdFilter' => [
            'type' => 'model',
            'class' => BrandStorePageBrandStoreEditionIdFilter::class,
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
        'pageIdFilter' => [
            'type' => 'model',
            'class' => BrandStorePagePageIdFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'storeEditionPublishIdFilter' => [
            'type' => 'model',
            'class' => BrandStorePageBrandStoreEditionPublishVersionIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'storeIdFilter' => [
            'type' => 'model',
            'class' => BrandStorePageBrandStoreIdFilter::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the editionIdFilter value.
     *
     * @return BrandStorePageBrandStoreEditionIdFilter|null
     */
    public function getEditionIdFilter(): ?BrandStorePageBrandStoreEditionIdFilter
    {
        /** @var BrandStorePageBrandStoreEditionIdFilter|null $value */
        $value = $this->getAttribute('editionIdFilter');

        return $value;
    }

    /**
     * Sets the editionIdFilter value.
     *
     * @param BrandStorePageBrandStoreEditionIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEditionIdFilter(BrandStorePageBrandStoreEditionIdFilter|array|null $value): self
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
     * Returns the pageIdFilter value.
     *
     * @return BrandStorePagePageIdFilter|null
     */
    public function getPageIdFilter(): ?BrandStorePagePageIdFilter
    {
        /** @var BrandStorePagePageIdFilter|null $value */
        $value = $this->getAttribute('pageIdFilter');

        return $value;
    }

    /**
     * Sets the pageIdFilter value.
     *
     * @param BrandStorePagePageIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPageIdFilter(BrandStorePagePageIdFilter|array|null $value): self
    {
        $this->setAttribute('pageIdFilter', $value);

        return $this;
    }

    /**
     * Returns the storeEditionPublishIdFilter value.
     *
     * @return BrandStorePageBrandStoreEditionPublishVersionIdFilter|null
     */
    public function getStoreEditionPublishIdFilter(): ?BrandStorePageBrandStoreEditionPublishVersionIdFilter
    {
        /** @var BrandStorePageBrandStoreEditionPublishVersionIdFilter|null $value */
        $value = $this->getAttribute('storeEditionPublishIdFilter');

        return $value;
    }

    /**
     * Sets the storeEditionPublishIdFilter value.
     *
     * @param BrandStorePageBrandStoreEditionPublishVersionIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreEditionPublishIdFilter(BrandStorePageBrandStoreEditionPublishVersionIdFilter|array|null $value): self
    {
        $this->setAttribute('storeEditionPublishIdFilter', $value);

        return $this;
    }

    /**
     * Returns the storeIdFilter value.
     *
     * @return BrandStorePageBrandStoreIdFilter|null
     */
    public function getStoreIdFilter(): ?BrandStorePageBrandStoreIdFilter
    {
        /** @var BrandStorePageBrandStoreIdFilter|null $value */
        $value = $this->getAttribute('storeIdFilter');

        return $value;
    }

    /**
     * Sets the storeIdFilter value.
     *
     * @param BrandStorePageBrandStoreIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreIdFilter(BrandStorePageBrandStoreIdFilter|array|null $value): self
    {
        $this->setAttribute('storeIdFilter', $value);

        return $this;
    }
}
