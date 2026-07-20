<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreProductCollectionWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreProductCollectionWidget.
 */
final class CreateStoreProductCollectionWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreProductCollectionWidget';

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
                'class' => CreateTag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'commonProperties' => [
            'type' => 'model',
            'class' => CreateCommonWidgetProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => CreateStoreProductCollectionContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'tiles' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreProductCollectionTile::class,
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
     * @return list<CreateTag>|null
     */
    public function getAiMetadata(): ?array
    {
        /** @var list<CreateTag>|null $value */
        $value = $this->getAttribute('aiMetadata');

        return $value;
    }

    /**
     * Sets Metadata about AI generated fields..
     *
     * @param list<CreateTag>|null $value New property value.
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
     * @return CreateCommonWidgetProperties|null
     */
    public function getCommonProperties(): ?CreateCommonWidgetProperties
    {
        /** @var CreateCommonWidgetProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CreateCommonWidgetProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CreateCommonWidgetProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return CreateStoreProductCollectionContent|null
     */
    public function getContent(): ?CreateStoreProductCollectionContent
    {
        /** @var CreateStoreProductCollectionContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param CreateStoreProductCollectionContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(CreateStoreProductCollectionContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

    /**
     * Returns The tiles for the product collection. Exactly two tiles are required..
     *
     * @return list<CreateStoreProductCollectionTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<CreateStoreProductCollectionTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The tiles for the product collection. Exactly two tiles are required..
     *
     * @param list<CreateStoreProductCollectionTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }
}
