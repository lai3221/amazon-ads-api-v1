<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Visual styling options for the product selector widget.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreProductSelectorDesignOptions.
 */
final class CreateStoreProductSelectorDesignOptions extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreProductSelectorDesignOptions';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'backgroundColor' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'backgroundShape' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'buttonColor' => [
            'type' => 'enum',
            'class' => StoreProductSelectorButtonColor::class,
            'required' => false,
            'nullable' => false,
        ],
        'buttonShape' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'textAlignment' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'textSize' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'textStyle' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'textWeight' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Background color in hex or named color value..
     *
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('backgroundColor');

        return $value;
    }

    /**
     * Sets Background color in hex or named color value..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBackgroundColor(?string $value): self
    {
        $this->setAttribute('backgroundColor', $value);

        return $this;
    }

    /**
     * Returns Shape of the background container..
     *
     * @return string|null
     */
    public function getBackgroundShape(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('backgroundShape');

        return $value;
    }

    /**
     * Sets Shape of the background container..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBackgroundShape(?string $value): self
    {
        $this->setAttribute('backgroundShape', $value);

        return $this;
    }

    /**
     * Returns the buttonColor value.
     *
     * @return StoreProductSelectorButtonColor|null
     */
    public function getButtonColor(): ?StoreProductSelectorButtonColor
    {
        /** @var StoreProductSelectorButtonColor|null $value */
        $value = $this->getAttribute('buttonColor');

        return $value;
    }

    /**
     * Sets the buttonColor value.
     *
     * @param StoreProductSelectorButtonColor|string|null $value New property value.
     * @return $this
     */
    public function setButtonColor(StoreProductSelectorButtonColor|string|null $value): self
    {
        $this->setAttribute('buttonColor', $value);

        return $this;
    }

    /**
     * Returns Shape style for buttons in the selector..
     *
     * @return string|null
     */
    public function getButtonShape(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('buttonShape');

        return $value;
    }

    /**
     * Sets Shape style for buttons in the selector..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setButtonShape(?string $value): self
    {
        $this->setAttribute('buttonShape', $value);

        return $this;
    }

    /**
     * Returns Alignment of text elements (left, center, right)..
     *
     * @return string|null
     */
    public function getTextAlignment(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('textAlignment');

        return $value;
    }

    /**
     * Sets Alignment of text elements (left, center, right)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTextAlignment(?string $value): self
    {
        $this->setAttribute('textAlignment', $value);

        return $this;
    }

    /**
     * Returns Size of the text elements..
     *
     * @return string|null
     */
    public function getTextSize(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('textSize');

        return $value;
    }

    /**
     * Sets Size of the text elements..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTextSize(?string $value): self
    {
        $this->setAttribute('textSize', $value);

        return $this;
    }

    /**
     * Returns Font family or style to be used..
     *
     * @return string|null
     */
    public function getTextStyle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('textStyle');

        return $value;
    }

    /**
     * Sets Font family or style to be used..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTextStyle(?string $value): self
    {
        $this->setAttribute('textStyle', $value);

        return $this;
    }

    /**
     * Returns Font weight for text elements..
     *
     * @return string|null
     */
    public function getTextWeight(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('textWeight');

        return $value;
    }

    /**
     * Sets Font weight for text elements..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTextWeight(?string $value): self
    {
        $this->setAttribute('textWeight', $value);

        return $this;
    }
}
