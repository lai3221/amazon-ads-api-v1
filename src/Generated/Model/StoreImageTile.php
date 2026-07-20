<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreImageTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreImageTile.
 */
final class StoreImageTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageTile';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CommonTileProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => StoreImageContent::class,
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
            'class' => StoreMobileImageContent::class,
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
     * @return CommonTileProperties|null
     */
    public function getCommonProperties(): ?CommonTileProperties
    {
        /** @var CommonTileProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CommonTileProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CommonTileProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return StoreImageContent|null
     */
    public function getContent(): ?StoreImageContent
    {
        /** @var StoreImageContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreImageContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreImageContent|array|null $value): self
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
     * @return StoreMobileImageContent|null
     */
    public function getMobileContent(): ?StoreMobileImageContent
    {
        /** @var StoreMobileImageContent|null $value */
        $value = $this->getAttribute('mobileContent');

        return $value;
    }

    /**
     * Sets the mobileContent value.
     *
     * @param StoreMobileImageContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobileContent(StoreMobileImageContent|array|null $value): self
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
