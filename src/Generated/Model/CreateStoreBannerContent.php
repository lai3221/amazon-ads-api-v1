<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreBannerContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreBannerContent.
 */
final class CreateStoreBannerContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreBannerContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'banners' => [
            'type' => 'model',
            'class' => CreateStoreBanners::class,
            'required' => false,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreWidgetType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the banners value.
     *
     * @return CreateStoreBanners|null
     */
    public function getBanners(): ?CreateStoreBanners
    {
        /** @var CreateStoreBanners|null $value */
        $value = $this->getAttribute('banners');

        return $value;
    }

    /**
     * Sets the banners value.
     *
     * @param CreateStoreBanners|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBanners(CreateStoreBanners|array|null $value): self
    {
        $this->setAttribute('banners', $value);

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
     * @return StoreWidgetType|null
     */
    public function getType(): ?StoreWidgetType
    {
        /** @var StoreWidgetType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreWidgetType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreWidgetType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
