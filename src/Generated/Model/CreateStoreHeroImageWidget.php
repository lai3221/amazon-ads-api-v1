<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreHeroImageWidget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreHeroImageWidget.
 */
final class CreateStoreHeroImageWidget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreHeroImageWidget';

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
        'content' => [
            'type' => 'model',
            'class' => CreateStoreHeroContent::class,
            'required' => false,
            'nullable' => false,
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
     * Returns the content value.
     *
     * @return CreateStoreHeroContent|null
     */
    public function getContent(): ?CreateStoreHeroContent
    {
        /** @var CreateStoreHeroContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param CreateStoreHeroContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(CreateStoreHeroContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }
}
