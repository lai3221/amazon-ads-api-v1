<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEditionPublishVersionStorePublishStatusFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEditionPublishVersionStorePublishStatusFilter.
 */
final class BrandStoreEditionPublishVersionStorePublishStatusFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEditionPublishVersionStorePublishStatusFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => StorePublishStatus::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns PublishStatus Description --- --- DRAFT Content is in draft state REVIEW IN PROGRESS Content is pending publication for review..
     *
     * @return list<StorePublishStatus>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<StorePublishStatus>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets PublishStatus Description --- --- DRAFT Content is in draft state REVIEW IN PROGRESS Content is pending publication for review..
     *
     * @param list<StorePublishStatus>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
