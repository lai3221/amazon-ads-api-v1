<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreCanvasData schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreCanvasData.
 */
final class CreateStoreCanvasData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreCanvasData';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'canvasHeight' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
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
        'naturalHeight' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'naturalWidth' => [
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
     * Returns Height in the canvas..
     *
     * @return int|float|null
     */
    public function getCanvasHeight(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('canvasHeight');

        return $value;
    }

    /**
     * Sets Height in the canvas..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setCanvasHeight(int|float|null $value): self
    {
        $this->setAttribute('canvasHeight', $value);

        return $this;
    }

    /**
     * Returns Height in the canvas..
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
     * Sets Height in the canvas..
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
     * Returns Left position in the canvas..
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
     * Sets Left position in the canvas..
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
     * Returns Natural height of the image..
     *
     * @return int|float|null
     */
    public function getNaturalHeight(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('naturalHeight');

        return $value;
    }

    /**
     * Sets Natural height of the image..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setNaturalHeight(int|float|null $value): self
    {
        $this->setAttribute('naturalHeight', $value);

        return $this;
    }

    /**
     * Returns Natural width of the image..
     *
     * @return int|float|null
     */
    public function getNaturalWidth(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('naturalWidth');

        return $value;
    }

    /**
     * Sets Natural width of the image..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setNaturalWidth(int|float|null $value): self
    {
        $this->setAttribute('naturalWidth', $value);

        return $this;
    }

    /**
     * Returns Top position in the canvas..
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
     * Sets Top position in the canvas..
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
     * Returns Width in the canvas..
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
     * Sets Width in the canvas..
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
