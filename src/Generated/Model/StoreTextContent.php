<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreTextContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreTextContent.
 */
final class StoreTextContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTextContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bold' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
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
        'customUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'pageId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'text' => [
            'type' => 'string',
            'required' => true,
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
            'required' => true,
            'nullable' => false,
        ],
        'uppercase' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Whether text should be bold..
     *
     * @return bool|null
     */
    public function getBold(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('bold');

        return $value;
    }

    /**
     * Sets Whether text should be bold..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setBold(?bool $value): self
    {
        $this->setAttribute('bold', $value);

        return $this;
    }

    /**
     * Returns Whether to include customer service link..
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
     * Sets Whether to include customer service link..
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
     * Returns Custom URL for the content..
     *
     * @return string|null
     */
    public function getCustomUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('customUrl');

        return $value;
    }

    /**
     * Sets Custom URL for the content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCustomUrl(?string $value): self
    {
        $this->setAttribute('customUrl', $value);

        return $this;
    }

    /**
     * Returns Identifier for the page..
     *
     * @return string|null
     */
    public function getPageId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pageId');

        return $value;
    }

    /**
     * Sets Identifier for the page..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPageId(?string $value): self
    {
        $this->setAttribute('pageId', $value);

        return $this;
    }

    /**
     * Returns Single product ASIN for the content..
     *
     * @return list<string>|null
     */
    public function getProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('productAsins');

        return $value;
    }

    /**
     * Sets Single product ASIN for the content..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setProductAsins(?array $value): self
    {
        $this->setAttribute('productAsins', $value);

        return $this;
    }

    /**
     * Returns Main text content..
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
     * Sets Main text content..
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
     * Returns Title of the content..
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
     * Sets Title of the content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }

    /**
     * Returns Whether text should be uppercase..
     *
     * @return bool|null
     */
    public function getUppercase(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('uppercase');

        return $value;
    }

    /**
     * Sets Whether text should be uppercase..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setUppercase(?bool $value): self
    {
        $this->setAttribute('uppercase', $value);

        return $this;
    }
}
