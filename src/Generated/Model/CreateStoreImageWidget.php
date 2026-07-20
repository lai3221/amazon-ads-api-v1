<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreImageWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreImageWidget.
 */
final class CreateStoreImageWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreImageWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CreateCommonWidgetProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'tiles' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreImageTile::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

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
     * Returns The image tile configuration. Exactly one tile is required..
     *
     * @return list<CreateStoreImageTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<CreateStoreImageTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The image tile configuration. Exactly one tile is required..
     *
     * @param list<CreateStoreImageTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }
}
