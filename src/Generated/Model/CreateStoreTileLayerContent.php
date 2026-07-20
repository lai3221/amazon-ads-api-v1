<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreTileLayerContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreTileLayerContent.
 */
final class CreateStoreTileLayerContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreTileLayerContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bodyText' => [
            'type' => 'string',
            'required' => false,
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
        'callToActionType' => [
            'type' => 'enum',
            'class' => StoreCallToActionType::class,
            'required' => false,
            'nullable' => false,
        ],
        'customUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'headerText' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'pageId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'prefixText' => [
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
        'tileTextAlignment' => [
            'type' => 'enum',
            'class' => StoreTextAlignment::class,
            'required' => false,
            'nullable' => false,
        ],
        'tileTextSize' => [
            'type' => 'enum',
            'class' => StoreTileTextSize::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Body text for the layer..
     *
     * @return string|null
     */
    public function getBodyText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('bodyText');

        return $value;
    }

    /**
     * Sets Body text for the layer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBodyText(?string $value): self
    {
        $this->setAttribute('bodyText', $value);

        return $this;
    }

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
     * Returns Call to action text for the layer..
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
     * Sets Call to action text for the layer..
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
     * Returns the callToActionType value.
     *
     * @return StoreCallToActionType|null
     */
    public function getCallToActionType(): ?StoreCallToActionType
    {
        /** @var StoreCallToActionType|null $value */
        $value = $this->getAttribute('callToActionType');

        return $value;
    }

    /**
     * Sets the callToActionType value.
     *
     * @param StoreCallToActionType|string|null $value New property value.
     * @return $this
     */
    public function setCallToActionType(StoreCallToActionType|string|null $value): self
    {
        $this->setAttribute('callToActionType', $value);

        return $this;
    }

    /**
     * Returns Custom URL for the layer..
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
     * Sets Custom URL for the layer..
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
     * Returns Header text for the layer..
     *
     * @return string|null
     */
    public function getHeaderText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headerText');

        return $value;
    }

    /**
     * Sets Header text for the layer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeaderText(?string $value): self
    {
        $this->setAttribute('headerText', $value);

        return $this;
    }

    /**
     * Returns Page identifier for the layer..
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
     * Sets Page identifier for the layer..
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
     * Returns Prefix text for the layer..
     *
     * @return string|null
     */
    public function getPrefixText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('prefixText');

        return $value;
    }

    /**
     * Sets Prefix text for the layer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPrefixText(?string $value): self
    {
        $this->setAttribute('prefixText', $value);

        return $this;
    }

    /**
     * Returns Single ASIN for the layer..
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
     * Sets Single ASIN for the layer..
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
     * Returns the tileTextAlignment value.
     *
     * @return StoreTextAlignment|null
     */
    public function getTileTextAlignment(): ?StoreTextAlignment
    {
        /** @var StoreTextAlignment|null $value */
        $value = $this->getAttribute('tileTextAlignment');

        return $value;
    }

    /**
     * Sets the tileTextAlignment value.
     *
     * @param StoreTextAlignment|string|null $value New property value.
     * @return $this
     */
    public function setTileTextAlignment(StoreTextAlignment|string|null $value): self
    {
        $this->setAttribute('tileTextAlignment', $value);

        return $this;
    }

    /**
     * Returns the tileTextSize value.
     *
     * @return StoreTileTextSize|null
     */
    public function getTileTextSize(): ?StoreTileTextSize
    {
        /** @var StoreTileTextSize|null $value */
        $value = $this->getAttribute('tileTextSize');

        return $value;
    }

    /**
     * Sets the tileTextSize value.
     *
     * @param StoreTileTextSize|string|null $value New property value.
     * @return $this
     */
    public function setTileTextSize(StoreTileTextSize|string|null $value): self
    {
        $this->setAttribute('tileTextSize', $value);

        return $this;
    }
}
