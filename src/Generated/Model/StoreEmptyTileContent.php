<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreEmptyTileContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreEmptyTileContent.
 */
final class StoreEmptyTileContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreEmptyTileContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bondCustomerServiceLink' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'callToAction' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'textAlign' => [
            'type' => 'enum',
            'class' => StoreTextAlignment::class,
            'required' => false,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Whether to include a customer service link..
     *
     * @return bool|null
     */
    public function getBondCustomerServiceLink(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('bondCustomerServiceLink');

        return $value;
    }

    /**
     * Sets Whether to include a customer service link..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setBondCustomerServiceLink(?bool $value): self
    {
        $this->setAttribute('bondCustomerServiceLink', $value);

        return $this;
    }

    /**
     * Returns Call to action text..
     *
     * @return string|null
     */
    public function getCallToAction(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('callToAction');

        return $value;
    }

    /**
     * Sets Call to action text..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCallToAction(?string $value): self
    {
        $this->setAttribute('callToAction', $value);

        return $this;
    }

    /**
     * Returns Text content (must be empty)..
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('text');

        return $value;
    }

    /**
     * Sets Text content (must be empty)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setText(?string $value): self
    {
        $this->setAttribute('text', $value);

        return $this;
    }

    /**
     * Returns the textAlign value.
     *
     * @return StoreTextAlignment|null
     */
    public function getTextAlign(): ?StoreTextAlignment
    {
        /** @var StoreTextAlignment|null $value */
        $value = $this->getAttribute('textAlign');

        return $value;
    }

    /**
     * Sets the textAlign value.
     *
     * @param StoreTextAlignment|string|null $value New property value.
     * @return $this
     */
    public function setTextAlign(StoreTextAlignment|string|null $value): self
    {
        $this->setAttribute('textAlign', $value);

        return $this;
    }

    /**
     * Returns Title of the tile (must be empty)..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Title of the tile (must be empty)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }
}
