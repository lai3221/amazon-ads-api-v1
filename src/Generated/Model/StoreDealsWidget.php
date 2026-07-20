<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreDealsWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreDealsWidget.
 */
final class StoreDealsWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreDealsWidget';

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
        'content' => [
            'type' => 'model',
            'class' => StoreDealsContent::class,
            'required' => false,
            'nullable' => false,
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
     * Returns the content value.
     *
     * @return StoreDealsContent|null
     */
    public function getContent(): ?StoreDealsContent
    {
        /** @var StoreDealsContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreDealsContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreDealsContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }
}
