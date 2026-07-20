<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreTileWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreTileWidget.
 */
final class CreateStoreTileWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreTileWidget';

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
        'rowHeight' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
        'tiles' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreTile::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 2,
            'maxItems' => 8,
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
     * Returns Height of the row in pixels..
     *
     * @return int|null
     */
    public function getRowHeight(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('rowHeight');

        return $value;
    }

    /**
     * Sets Height of the row in pixels..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setRowHeight(?int $value): self
    {
        $this->setAttribute('rowHeight', $value);

        return $this;
    }

    /**
     * Returns The tiles for the widget. Minimum 2 and maximum 8 tiles are allowed..
     *
     * @return list<CreateStoreTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<CreateStoreTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The tiles for the widget. Minimum 2 and maximum 8 tiles are allowed..
     *
     * @param list<CreateStoreTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }
}
