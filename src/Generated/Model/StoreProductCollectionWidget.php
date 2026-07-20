<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreProductCollectionWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCollectionWidget.
 */
final class StoreProductCollectionWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCollectionWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'aiMetadata' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Tag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'commonProperties' => [
            'type' => 'model',
            'class' => CommonWidgetProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => StoreProductCollectionContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'tiles' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StoreProductCollectionTile::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 2,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns Metadata about AI generated fields..
     *
     * @return list<Tag>|null
     */
    public function getAiMetadata(): ?array
    {
        /** @var list<Tag>|null $value */
        $value = $this->getAttribute('aiMetadata');

        return $value;
    }

    /**
     * Sets Metadata about AI generated fields..
     *
     * @param list<Tag>|null $value New property value.
     * @return $this
     */
    public function setAiMetadata(?array $value): self
    {
        $this->setAttribute('aiMetadata', $value);

        return $this;
    }

    /**
     * Returns the commonProperties value.
     *
     * @return CommonWidgetProperties|null
     */
    public function getCommonProperties(): ?CommonWidgetProperties
    {
        /** @var CommonWidgetProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CommonWidgetProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CommonWidgetProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return StoreProductCollectionContent|null
     */
    public function getContent(): ?StoreProductCollectionContent
    {
        /** @var StoreProductCollectionContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreProductCollectionContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreProductCollectionContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

    /**
     * Returns The tiles for the product collection. Exactly two tiles are required..
     *
     * @return list<StoreProductCollectionTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<StoreProductCollectionTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The tiles for the product collection. Exactly two tiles are required..
     *
     * @param list<StoreProductCollectionTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }
}
