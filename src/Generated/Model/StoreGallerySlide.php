<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreGallerySlide schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreGallerySlide.
 */
final class StoreGallerySlide extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreGallerySlide';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'alt' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreSlideType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Alternative text for the slide..
     *
     * @return string|null
     */
    public function getAlt(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('alt');

        return $value;
    }

    /**
     * Sets Alternative text for the slide..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAlt(?string $value): self
    {
        $this->setAttribute('alt', $value);

        return $this;
    }

    /**
     * Returns Asset identifier for the slide..
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetId');

        return $value;
    }

    /**
     * Sets Asset identifier for the slide..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetId(?string $value): self
    {
        $this->setAttribute('assetId', $value);

        return $this;
    }

    /**
     * Returns Key identifier for the image..
     *
     * @return string|null
     */
    public function getImageKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('imageKey');

        return $value;
    }

    /**
     * Sets Key identifier for the image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setImageKey(?string $value): self
    {
        $this->setAttribute('imageKey', $value);

        return $this;
    }

    /**
     * Returns the type value.
     *
     * @return StoreSlideType|null
     */
    public function getType(): ?StoreSlideType
    {
        /** @var StoreSlideType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreSlideType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreSlideType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
