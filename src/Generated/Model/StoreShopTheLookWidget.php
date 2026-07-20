<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreShopTheLookWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreShopTheLookWidget.
 */
final class StoreShopTheLookWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreShopTheLookWidget';

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
            'class' => StoreShopTheLookContent::class,
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
     * @return StoreShopTheLookContent|null
     */
    public function getContent(): ?StoreShopTheLookContent
    {
        /** @var StoreShopTheLookContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreShopTheLookContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreShopTheLookContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }
}
