<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreProductCollectionContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCollectionContent.
 */
final class StoreProductCollectionContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCollectionContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'collectionTags' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productGridConversionTimestamp' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Tags associated with the collection..
     *
     * @return string|null
     */
    public function getCollectionTags(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('collectionTags');

        return $value;
    }

    /**
     * Sets Tags associated with the collection..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCollectionTags(?string $value): self
    {
        $this->setAttribute('collectionTags', $value);

        return $this;
    }

    /**
     * Returns Timestamp of product grid conversion..
     *
     * @return int|float|null
     */
    public function getProductGridConversionTimestamp(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('productGridConversionTimestamp');

        return $value;
    }

    /**
     * Sets Timestamp of product grid conversion..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setProductGridConversionTimestamp(int|float|null $value): self
    {
        $this->setAttribute('productGridConversionTimestamp', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the content..
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
     * Sets Unique tag for the content..
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
     * @return StoreWidgetType|null
     */
    public function getType(): ?StoreWidgetType
    {
        /** @var StoreWidgetType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreWidgetType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreWidgetType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
