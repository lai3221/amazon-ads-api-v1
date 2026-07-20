<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreImageWithTextWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreImageWithTextWidget.
 */
final class StoreImageWithTextWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreImageWithTextWidget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CommonWidgetProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'tiles' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StoreImageWithTextTile::class,
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
     * Returns The image with text tile configuration. Exactly one tile is required..
     *
     * @return list<StoreImageWithTextTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<StoreImageWithTextTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The image with text tile configuration. Exactly one tile is required..
     *
     * @param list<StoreImageWithTextTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }
}
