<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateFormatProperties schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateFormatProperties.
 */
final class CreateFormatProperties extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateFormatProperties';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'applyBorder' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'height' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
        'left' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
        'top' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
        'width' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Apply a boarder to the image to fit rules for some supplies..
     *
     * @return bool|null
     */
    public function getApplyBorder(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('applyBorder');

        return $value;
    }

    /**
     * Sets Apply a boarder to the image to fit rules for some supplies..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setApplyBorder(?bool $value): self
    {
        $this->setAttribute('applyBorder', $value);

        return $this;
    }

    /**
     * Returns The height (in pixels) of the cropped image..
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('height');

        return $value;
    }

    /**
     * Sets The height (in pixels) of the cropped image..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setHeight(?int $value): self
    {
        $this->setAttribute('height', $value);

        return $this;
    }

    /**
     * Returns The number of pixels from the left of the image where the crop should begin..
     *
     * @return int|null
     */
    public function getLeft(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('left');

        return $value;
    }

    /**
     * Sets The number of pixels from the left of the image where the crop should begin..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setLeft(?int $value): self
    {
        $this->setAttribute('left', $value);

        return $this;
    }

    /**
     * Returns The number of pixels from the top of the image where the crop should begin..
     *
     * @return int|null
     */
    public function getTop(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('top');

        return $value;
    }

    /**
     * Sets The number of pixels from the top of the image where the crop should begin..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTop(?int $value): self
    {
        $this->setAttribute('top', $value);

        return $this;
    }

    /**
     * Returns The width (in pixels) of the cropped image..
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('width');

        return $value;
    }

    /**
     * Sets The width (in pixels) of the cropped image..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setWidth(?int $value): self
    {
        $this->setAttribute('width', $value);

        return $this;
    }
}
