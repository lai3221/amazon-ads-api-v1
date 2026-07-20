<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateBrandStorePageRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateBrandStorePageRequest.
 */
final class UpdateBrandStorePageRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateBrandStorePageRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStorePages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStorePageUpdate::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the brandStorePages value.
     *
     * @return list<BrandStorePageUpdate>|null
     */
    public function getBrandStorePages(): ?array
    {
        /** @var list<BrandStorePageUpdate>|null $value */
        $value = $this->getAttribute('brandStorePages');

        return $value;
    }

    /**
     * Sets the brandStorePages value.
     *
     * @param list<BrandStorePageUpdate>|null $value New property value.
     * @return $this
     */
    public function setBrandStorePages(?array $value): self
    {
        $this->setAttribute('brandStorePages', $value);

        return $this;
    }
}
