<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateBrandStoreEditionPublishVersionRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateBrandStoreEditionPublishVersionRequest.
 */
final class UpdateBrandStoreEditionPublishVersionRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateBrandStoreEditionPublishVersionRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStoreEditionPublishVersions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStoreEditionPublishVersionUpdate::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the brandStoreEditionPublishVersions value.
     *
     * @return list<BrandStoreEditionPublishVersionUpdate>|null
     */
    public function getBrandStoreEditionPublishVersions(): ?array
    {
        /** @var list<BrandStoreEditionPublishVersionUpdate>|null $value */
        $value = $this->getAttribute('brandStoreEditionPublishVersions');

        return $value;
    }

    /**
     * Sets the brandStoreEditionPublishVersions value.
     *
     * @param list<BrandStoreEditionPublishVersionUpdate>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreEditionPublishVersions(?array $value): self
    {
        $this->setAttribute('brandStoreEditionPublishVersions', $value);

        return $this;
    }
}
