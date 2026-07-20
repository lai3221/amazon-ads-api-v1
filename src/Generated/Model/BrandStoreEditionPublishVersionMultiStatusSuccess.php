<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEditionPublishVersionMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEditionPublishVersionMultiStatusSuccess.
 */
final class BrandStoreEditionPublishVersionMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEditionPublishVersionMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStoreEditionPublishVersion' => [
            'type' => 'model',
            'class' => BrandStoreEditionPublishVersion::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 0,
        ],
    ];

    /**
     * Returns the brandStoreEditionPublishVersion value.
     *
     * @return BrandStoreEditionPublishVersion|null
     */
    public function getBrandStoreEditionPublishVersion(): ?BrandStoreEditionPublishVersion
    {
        /** @var BrandStoreEditionPublishVersion|null $value */
        $value = $this->getAttribute('brandStoreEditionPublishVersion');

        return $value;
    }

    /**
     * Sets the brandStoreEditionPublishVersion value.
     *
     * @param BrandStoreEditionPublishVersion|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreEditionPublishVersion(BrandStoreEditionPublishVersion|array|null $value): self
    {
        $this->setAttribute('brandStoreEditionPublishVersion', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
