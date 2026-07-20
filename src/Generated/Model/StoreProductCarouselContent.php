<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreProductCarouselContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCarouselContent.
 */
final class StoreProductCarouselContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCarouselContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'callToActionData' => [
            'type' => 'model',
            'class' => StoreCallToActionProductData::class,
            'required' => false,
            'nullable' => false,
        ],
        'searchContent' => [
            'type' => 'model',
            'class' => StoreProductCarouselSearch::class,
            'required' => false,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetSectionType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the callToActionData value.
     *
     * @return StoreCallToActionProductData|null
     */
    public function getCallToActionData(): ?StoreCallToActionProductData
    {
        /** @var StoreCallToActionProductData|null $value */
        $value = $this->getAttribute('callToActionData');

        return $value;
    }

    /**
     * Sets the callToActionData value.
     *
     * @param StoreCallToActionProductData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToActionData(StoreCallToActionProductData|array|null $value): self
    {
        $this->setAttribute('callToActionData', $value);

        return $this;
    }

    /**
     * Returns the searchContent value.
     *
     * @return StoreProductCarouselSearch|null
     */
    public function getSearchContent(): ?StoreProductCarouselSearch
    {
        /** @var StoreProductCarouselSearch|null $value */
        $value = $this->getAttribute('searchContent');

        return $value;
    }

    /**
     * Sets the searchContent value.
     *
     * @param StoreProductCarouselSearch|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSearchContent(StoreProductCarouselSearch|array|null $value): self
    {
        $this->setAttribute('searchContent', $value);

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
     * @return StoreWidgetSectionType|null
     */
    public function getType(): ?StoreWidgetSectionType
    {
        /** @var StoreWidgetSectionType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreWidgetSectionType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreWidgetSectionType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
