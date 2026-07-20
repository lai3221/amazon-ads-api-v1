<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCommonWidgetProperties schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCommonWidgetProperties.
 */
final class CreateCommonWidgetProperties extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCommonWidgetProperties';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'sectionType' => [
            'type' => 'enum',
            'class' => StoreWidgetSectionType::class,
            'required' => true,
            'nullable' => false,
        ],
        'widgetTag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'widgetType' => [
            'type' => 'enum',
            'class' => StoreWidgetType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the sectionType value.
     *
     * @return StoreWidgetSectionType|null
     */
    public function getSectionType(): ?StoreWidgetSectionType
    {
        /** @var StoreWidgetSectionType|null $value */
        $value = $this->getAttribute('sectionType');

        return $value;
    }

    /**
     * Sets the sectionType value.
     *
     * @param StoreWidgetSectionType|string|null $value New property value.
     * @return $this
     */
    public function setSectionType(StoreWidgetSectionType|string|null $value): self
    {
        $this->setAttribute('sectionType', $value);

        return $this;
    }

    /**
     * Returns The unique tag for the widget to help track on performance..
     *
     * @return string|null
     */
    public function getWidgetTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('widgetTag');

        return $value;
    }

    /**
     * Sets The unique tag for the widget to help track on performance..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setWidgetTag(?string $value): self
    {
        $this->setAttribute('widgetTag', $value);

        return $this;
    }

    /**
     * Returns the widgetType value.
     *
     * @return StoreWidgetType|null
     */
    public function getWidgetType(): ?StoreWidgetType
    {
        /** @var StoreWidgetType|null $value */
        $value = $this->getAttribute('widgetType');

        return $value;
    }

    /**
     * Sets the widgetType value.
     *
     * @param StoreWidgetType|string|null $value New property value.
     * @return $this
     */
    public function setWidgetType(StoreWidgetType|string|null $value): self
    {
        $this->setAttribute('widgetType', $value);

        return $this;
    }
}
