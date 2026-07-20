<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreCropBoxData schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreCropBoxData.
 */
final class StoreCropBoxData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreCropBoxData';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'height' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'left' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'top' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'width' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Height of the crop box..
     *
     * @return int|float|null
     */
    public function getHeight(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('height');

        return $value;
    }

    /**
     * Sets Height of the crop box..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setHeight(int|float|null $value): self
    {
        $this->setAttribute('height', $value);

        return $this;
    }

    /**
     * Returns Left position of the crop box..
     *
     * @return int|float|null
     */
    public function getLeft(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('left');

        return $value;
    }

    /**
     * Sets Left position of the crop box..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setLeft(int|float|null $value): self
    {
        $this->setAttribute('left', $value);

        return $this;
    }

    /**
     * Returns Top position of the crop box..
     *
     * @return int|float|null
     */
    public function getTop(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('top');

        return $value;
    }

    /**
     * Sets Top position of the crop box..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setTop(int|float|null $value): self
    {
        $this->setAttribute('top', $value);

        return $this;
    }

    /**
     * Returns Width of the crop box..
     *
     * @return int|float|null
     */
    public function getWidth(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('width');

        return $value;
    }

    /**
     * Sets Width of the crop box..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setWidth(int|float|null $value): self
    {
        $this->setAttribute('width', $value);

        return $this;
    }
}
