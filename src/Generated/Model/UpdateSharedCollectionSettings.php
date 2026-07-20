<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Settings shared by all collection types.
 *
 * @generated from Amazon Ads API v1 schema UpdateSharedCollectionSettings.
 */
final class UpdateSharedCollectionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateSharedCollectionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brand' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'brandLogos' => [
            'type' => 'model',
            'class' => UpdateImage::class,
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
     * @return UpdateImage|null
     */
    public function getBrandLogos(): ?UpdateImage
    {
        /** @var UpdateImage|null $value */
        $value = $this->getAttribute('brandLogos');

        return $value;
    }

    /**
     * Sets the brandLogos value.
     *
     * @param UpdateImage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandLogos(UpdateImage|array|null $value): self
    {
        $this->setAttribute('brandLogos', $value);

        return $this;
    }
}
