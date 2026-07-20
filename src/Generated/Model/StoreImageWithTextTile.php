<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreImageWithTextTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreImageWithTextTile.
 */
final class StoreImageWithTextTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageWithTextTile';

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
            'class' => StoreImageWithTextContent::class,
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
            'class' => StoreMobileImageWithTextContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'uploadMobileImage' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'variation' => [
            'type' => 'enum',
            'class' => StoreImageWithTextTileVariation::class,
            'required' => true,
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
     * @return StoreImageWithTextContent|null
     */
    public function getContent(): ?StoreImageWithTextContent
    {
        /** @var StoreImageWithTextContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreImageWithTextContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreImageWithTextContent|array|null $value): self
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
     * @return StoreMobileImageWithTextContent|null
     */
    public function getMobileContent(): ?StoreMobileImageWithTextContent
    {
        /** @var StoreMobileImageWithTextContent|null $value */
        $value = $this->getAttribute('mobileContent');

        return $value;
    }

    /**
     * Sets the mobileContent value.
     *
     * @param StoreMobileImageWithTextContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobileContent(StoreMobileImageWithTextContent|array|null $value): self
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

    /**
     * Returns the variation value.
     *
     * @return StoreImageWithTextTileVariation|null
     */
    public function getVariation(): ?StoreImageWithTextTileVariation
    {
        /** @var StoreImageWithTextTileVariation|null $value */
        $value = $this->getAttribute('variation');

        return $value;
    }

    /**
     * Sets the variation value.
     *
     * @param StoreImageWithTextTileVariation|string|null $value New property value.
     * @return $this
     */
    public function setVariation(StoreImageWithTextTileVariation|string|null $value): self
    {
        $this->setAttribute('variation', $value);

        return $this;
    }
}
