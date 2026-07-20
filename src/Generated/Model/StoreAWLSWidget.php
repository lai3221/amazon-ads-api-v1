<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreAWLSWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreAWLSWidget.
 */
final class StoreAWLSWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreAWLSWidget';

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
                'class' => StoreAWLSTile::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'widgetDependencies' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
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
     * Returns The AWLS tile configuration. Exactly one tile is required..
     *
     * @return list<StoreAWLSTile>|null
     */
    public function getTiles(): ?array
    {
        /** @var list<StoreAWLSTile>|null $value */
        $value = $this->getAttribute('tiles');

        return $value;
    }

    /**
     * Sets The AWLS tile configuration. Exactly one tile is required..
     *
     * @param list<StoreAWLSTile>|null $value New property value.
     * @return $this
     */
    public function setTiles(?array $value): self
    {
        $this->setAttribute('tiles', $value);

        return $this;
    }

    /**
     * Returns List of widget dependencies..
     *
     * @return list<string>|null
     */
    public function getWidgetDependencies(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('widgetDependencies');

        return $value;
    }

    /**
     * Sets List of widget dependencies..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setWidgetDependencies(?array $value): self
    {
        $this->setAttribute('widgetDependencies', $value);

        return $this;
    }
}
