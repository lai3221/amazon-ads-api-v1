<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEditionPublishVersionSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEditionPublishVersionSuccessResponse.
 */
final class BrandStoreEditionPublishVersionSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEditionPublishVersionSuccessResponse';

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
                'class' => BrandStoreEditionPublishVersion::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the brandStoreEditionPublishVersions value.
     *
     * @return list<BrandStoreEditionPublishVersion>|null
     */
    public function getBrandStoreEditionPublishVersions(): ?array
    {
        /** @var list<BrandStoreEditionPublishVersion>|null $value */
        $value = $this->getAttribute('brandStoreEditionPublishVersions');

        return $value;
    }

    /**
     * Sets the brandStoreEditionPublishVersions value.
     *
     * @param list<BrandStoreEditionPublishVersion>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreEditionPublishVersions(?array $value): self
    {
        $this->setAttribute('brandStoreEditionPublishVersions', $value);

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
