<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents a possible answer in the product selector questionnaire.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorAnswer.
 */
final class StoreProductSelectorAnswer extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorAnswer';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'image' => [
            'type' => 'model',
            'class' => StoreProductSelectorImage::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextStep' => [
            'type' => 'string',
            'required' => true,
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
            'maxItems' => 500,
        ],
        'tag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the image value.
     *
     * @return StoreProductSelectorImage|null
     */
    public function getImage(): ?StoreProductSelectorImage
    {
        /** @var StoreProductSelectorImage|null $value */
        $value = $this->getAttribute('image');

        return $value;
    }

    /**
     * Sets the image value.
     *
     * @param StoreProductSelectorImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setImage(StoreProductSelectorImage|array|null $value): self
    {
        $this->setAttribute('image', $value);

        return $this;
    }

    /**
     * Returns Reference to the next question or step in the selection flow..
     *
     * @return string|null
     */
    public function getNextStep(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextStep');

        return $value;
    }

    /**
     * Sets Reference to the next question or step in the selection flow..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextStep(?string $value): self
    {
        $this->setAttribute('nextStep', $value);

        return $this;
    }

    /**
     * Returns List of ASINs associated with this answer..
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
     * Sets List of ASINs associated with this answer..
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
     * Returns Unique identifier for the answer..
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tag');

        return $value;
    }

    /**
     * Sets Unique identifier for the answer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTag(?string $value): self
    {
        $this->setAttribute('tag', $value);

        return $this;
    }

    /**
     * Returns Display text for the answer option..
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
     * Sets Display text for the answer option..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setText(?string $value): self
    {
        $this->setAttribute('text', $value);

        return $this;
    }
}
