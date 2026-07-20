<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Settings shared by all collection types.
 *
 * @generated from Amazon Ads API v1 schema SharedCollectionSettings.
 */
final class SharedCollectionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SharedCollectionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brand' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'brandLogos' => [
            'type' => 'model',
            'class' => Image::class,
            'required' => false,
            'nullable' => false,
        ],
        'moderationStatus' => [
            'type' => 'model',
            'class' => CreativeStatus::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The name of the brand being advertised..
     *
     * @return string|null
     */
    public function getBrand(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('brand');

        return $value;
    }

    /**
     * Sets The name of the brand being advertised..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBrand(?string $value): self
    {
        $this->setAttribute('brand', $value);

        return $this;
    }

    /**
     * Returns the brandLogos value.
     *
     * @return Image|null
     */
    public function getBrandLogos(): ?Image
    {
        /** @var Image|null $value */
        $value = $this->getAttribute('brandLogos');

        return $value;
    }

    /**
     * Sets the brandLogos value.
     *
     * @param Image|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandLogos(Image|array|null $value): self
    {
        $this->setAttribute('brandLogos', $value);

        return $this;
    }

    /**
     * Returns the moderationStatus value.
     *
     * @return CreativeStatus|null
     */
    public function getModerationStatus(): ?CreativeStatus
    {
        /** @var CreativeStatus|null $value */
        $value = $this->getAttribute('moderationStatus');

        return $value;
    }

    /**
     * Sets the moderationStatus value.
     *
     * @param CreativeStatus|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setModerationStatus(CreativeStatus|array|null $value): self
    {
        $this->setAttribute('moderationStatus', $value);

        return $this;
    }
}
