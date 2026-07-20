<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents a question in the product selector questionnaire.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorQuestion.
 */
final class StoreProductSelectorQuestion extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorQuestion';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'answerList' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StoreProductSelectorAnswer::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'areImagesEnabled' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'hasImage' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
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
     * Returns List of possible answers for this question..
     *
     * @return list<StoreProductSelectorAnswer>|null
     */
    public function getAnswerList(): ?array
    {
        /** @var list<StoreProductSelectorAnswer>|null $value */
        $value = $this->getAttribute('answerList');

        return $value;
    }

    /**
     * Sets List of possible answers for this question..
     *
     * @param list<StoreProductSelectorAnswer>|null $value New property value.
     * @return $this
     */
    public function setAnswerList(?array $value): self
    {
        $this->setAttribute('answerList', $value);

        return $this;
    }

    /**
     * Returns Flag indicating whether images are enabled..
     *
     * @return bool|null
     */
    public function getAreImagesEnabled(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('areImagesEnabled');

        return $value;
    }

    /**
     * Sets Flag indicating whether images are enabled..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAreImagesEnabled(?bool $value): self
    {
        $this->setAttribute('areImagesEnabled', $value);

        return $this;
    }

    /**
     * Returns Additional descriptive text or context for the question..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Additional descriptive text or context for the question..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns Flag indicating whether the question has an image..
     *
     * @return bool|null
     */
    public function getHasImage(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('hasImage');

        return $value;
    }

    /**
     * Sets Flag indicating whether the question has an image..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setHasImage(?bool $value): self
    {
        $this->setAttribute('hasImage', $value);

        return $this;
    }

    /**
     * Returns Unique identifier for the question..
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
     * Sets Unique identifier for the question..
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
     * Returns Main question text displayed to the user..
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
     * Sets Main question text displayed to the user..
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
