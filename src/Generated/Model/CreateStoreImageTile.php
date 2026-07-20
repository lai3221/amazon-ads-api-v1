<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreImageTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreImageTile.
 */
final class CreateStoreImageTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreImageTile';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CreateCommonTileProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => CreateStoreImageContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'flexHeight' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'mobileContent' => [
            'type' => 'model',
            'class' => CreateStoreMobileImageContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'uploadMobileImage' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the commonProperties value.
     *
     * @return CreateCommonTileProperties|null
     */
    public function getCommonProperties(): ?CreateCommonTileProperties
    {
        /** @var CreateCommonTileProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CreateCommonTileProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CreateCommonTileProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return CreateStoreImageContent|null
     */
    public function getContent(): ?CreateStoreImageContent
    {
        /** @var CreateStoreImageContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param CreateStoreImageContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(CreateStoreImageContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

    /**
     * Returns Whether the height is flexible..
     *
     * @return bool|null
     */
    public function getFlexHeight(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('flexHeight');

        return $value;
    }

    /**
     * Sets Whether the height is flexible..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setFlexHeight(?bool $value): self
    {
        $this->setAttribute('flexHeight', $value);

        return $this;
    }

    /**
     * Returns the mobileContent value.
     *
     * @return CreateStoreMobileImageContent|null
     */
    public function getMobileContent(): ?CreateStoreMobileImageContent
    {
        /** @var CreateStoreMobileImageContent|null $value */
        $value = $this->getAttribute('mobileContent');

        return $value;
    }

    /**
     * Sets the mobileContent value.
     *
     * @param CreateStoreMobileImageContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobileContent(CreateStoreMobileImageContent|array|null $value): self
    {
        $this->setAttribute('mobileContent', $value);

        return $this;
    }

    /**
     * Returns Whether to upload a mobile-specific image..
     *
     * @return bool|null
     */
    public function getUploadMobileImage(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('uploadMobileImage');

        return $value;
    }

    /**
     * Sets Whether to upload a mobile-specific image..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setUploadMobileImage(?bool $value): self
    {
        $this->setAttribute('uploadMobileImage', $value);

        return $this;
    }
}
