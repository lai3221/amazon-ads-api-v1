<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreDealsContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreDealsContent.
 */
final class StoreDealsContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreDealsContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deals' => [
            'type' => 'model',
            'class' => StoreDealsConfig::class,
            'required' => false,
            'nullable' => false,
        ],
        'dealsMode' => [
            'type' => 'enum',
            'class' => StoreDealsMode::class,
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
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetSectionType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the deals value.
     *
     * @return StoreDealsConfig|null
     */
    public function getDeals(): ?StoreDealsConfig
    {
        /** @var StoreDealsConfig|null $value */
        $value = $this->getAttribute('deals');

        return $value;
    }

    /**
     * Sets the deals value.
     *
     * @param StoreDealsConfig|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDeals(StoreDealsConfig|array|null $value): self
    {
        $this->setAttribute('deals', $value);

        return $this;
    }

    /**
     * Returns the dealsMode value.
     *
     * @return StoreDealsMode|null
     */
    public function getDealsMode(): ?StoreDealsMode
    {
        /** @var StoreDealsMode|null $value */
        $value = $this->getAttribute('dealsMode');

        return $value;
    }

    /**
     * Sets the dealsMode value.
     *
     * @param StoreDealsMode|string|null $value New property value.
     * @return $this
     */
    public function setDealsMode(StoreDealsMode|string|null $value): self
    {
        $this->setAttribute('dealsMode', $value);

        return $this;
    }

    /**
     * Returns List of ASINs, maximum 500 unique items..
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
     * Sets List of ASINs, maximum 500 unique items..
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
     * Returns Unique tag for the content to track performance..
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
     * Sets Unique tag for the content to track performance..
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
     * Returns the type value.
     *
     * @return StoreWidgetSectionType|null
     */
    public function getType(): ?StoreWidgetSectionType
    {
        /** @var StoreWidgetSectionType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreWidgetSectionType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreWidgetSectionType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
