<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreGalleryContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreGalleryContent.
 */
final class CreateStoreGalleryContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreGalleryContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'metadata' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreMetadataItem::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 15,
        ],
        'slides' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStoreGallerySlide::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 15,
        ],
        'tag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'title' => [
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
     * Returns Metadata associated with the gallery..
     *
     * @return list<CreateStoreMetadataItem>|null
     */
    public function getMetadata(): ?array
    {
        /** @var list<CreateStoreMetadataItem>|null $value */
        $value = $this->getAttribute('metadata');

        return $value;
    }

    /**
     * Sets Metadata associated with the gallery..
     *
     * @param list<CreateStoreMetadataItem>|null $value New property value.
     * @return $this
     */
    public function setMetadata(?array $value): self
    {
        $this->setAttribute('metadata', $value);

        return $this;
    }

    /**
     * Returns List of slides in the gallery..
     *
     * @return list<CreateStoreGallerySlide>|null
     */
    public function getSlides(): ?array
    {
        /** @var list<CreateStoreGallerySlide>|null $value */
        $value = $this->getAttribute('slides');

        return $value;
    }

    /**
     * Sets List of slides in the gallery..
     *
     * @param list<CreateStoreGallerySlide>|null $value New property value.
     * @return $this
     */
    public function setSlides(?array $value): self
    {
        $this->setAttribute('slides', $value);

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
     * Returns Text content of the gallery..
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('text');

        return $value;
    }

    /**
     * Sets Text content of the gallery..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setText(?string $value): self
    {
        $this->setAttribute('text', $value);

        return $this;
    }

    /**
     * Returns Title of the gallery..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Title of the gallery..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

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
