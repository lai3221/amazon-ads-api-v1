<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Main widget structure for the product selector feature.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorWidget.
 */
final class StoreProductSelectorWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'designOptions' => [
            'type' => 'model',
            'class' => StoreProductSelectorDesignOptions::class,
            'required' => true,
            'nullable' => false,
        ],
        'introduction' => [
            'type' => 'model',
            'class' => StoreProductSelectorIntroduction::class,
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
            'maxItems' => 500,
        ],
        'questionList' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StoreProductSelectorQuestion::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'results' => [
            'type' => 'model',
            'class' => StoreProductSelectorResults::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the designOptions value.
     *
     * @return StoreProductSelectorDesignOptions|null
     */
    public function getDesignOptions(): ?StoreProductSelectorDesignOptions
    {
        /** @var StoreProductSelectorDesignOptions|null $value */
        $value = $this->getAttribute('designOptions');

        return $value;
    }

    /**
     * Sets the designOptions value.
     *
     * @param StoreProductSelectorDesignOptions|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDesignOptions(StoreProductSelectorDesignOptions|array|null $value): self
    {
        $this->setAttribute('designOptions', $value);

        return $this;
    }

    /**
     * Returns the introduction value.
     *
     * @return StoreProductSelectorIntroduction|null
     */
    public function getIntroduction(): ?StoreProductSelectorIntroduction
    {
        /** @var StoreProductSelectorIntroduction|null $value */
        $value = $this->getAttribute('introduction');

        return $value;
    }

    /**
     * Sets the introduction value.
     *
     * @param StoreProductSelectorIntroduction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIntroduction(StoreProductSelectorIntroduction|array|null $value): self
    {
        $this->setAttribute('introduction', $value);

        return $this;
    }

    /**
     * Returns Master list of ASINs available in the selector..
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
     * Sets Master list of ASINs available in the selector..
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
     * Returns Ordered list of questions in the selector flow..
     *
     * @return list<StoreProductSelectorQuestion>|null
     */
    public function getQuestionList(): ?array
    {
        /** @var list<StoreProductSelectorQuestion>|null $value */
        $value = $this->getAttribute('questionList');

        return $value;
    }

    /**
     * Sets Ordered list of questions in the selector flow..
     *
     * @param list<StoreProductSelectorQuestion>|null $value New property value.
     * @return $this
     */
    public function setQuestionList(?array $value): self
    {
        $this->setAttribute('questionList', $value);

        return $this;
    }

    /**
     * Returns the results value.
     *
     * @return StoreProductSelectorResults|null
     */
    public function getResults(): ?StoreProductSelectorResults
    {
        /** @var StoreProductSelectorResults|null $value */
        $value = $this->getAttribute('results');

        return $value;
    }

    /**
     * Sets the results value.
     *
     * @param StoreProductSelectorResults|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setResults(StoreProductSelectorResults|array|null $value): self
    {
        $this->setAttribute('results', $value);

        return $this;
    }
}
