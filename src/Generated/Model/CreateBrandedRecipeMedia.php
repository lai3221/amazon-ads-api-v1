<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents media content associated with a recipe.
 *
 * @generated from Amazon Ads API v1 schema CreateBrandedRecipeMedia.
 */
final class CreateBrandedRecipeMedia extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateBrandedRecipeMedia';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'altText' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetLibraryId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'mediaUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Alternative text description of the media content..
     *
     * @return string|null
     */
    public function getAltText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('altText');

        return $value;
    }

    /**
     * Sets Alternative text description of the media content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAltText(?string $value): self
    {
        $this->setAttribute('altText', $value);

        return $this;
    }

    /**
     * Returns Identifier for the asset..
     *
     * @return string|null
     */
    public function getAssetLibraryId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetLibraryId');

        return $value;
    }

    /**
     * Sets Identifier for the asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetLibraryId(?string $value): self
    {
        $this->setAttribute('assetLibraryId', $value);

        return $this;
    }

    /**
     * Returns URL of the media content..
     *
     * @return string|null
     */
    public function getMediaUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('mediaUrl');

        return $value;
    }

    /**
     * Sets URL of the media content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setMediaUrl(?string $value): self
    {
        $this->setAttribute('mediaUrl', $value);

        return $this;
    }
}
