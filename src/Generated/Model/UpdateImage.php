<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateImage schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateImage.
 */
final class UpdateImage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateImage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'assetVersion' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'formatProperties' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateFormatProperties::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns The asset library ID associated with the image asset..
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetId');

        return $value;
    }

    /**
     * Sets The asset library ID associated with the image asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetId(?string $value): self
    {
        $this->setAttribute('assetId', $value);

        return $this;
    }

    /**
     * Returns The asset library version associated with the image asset..
     *
     * @return string|null
     */
    public function getAssetVersion(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetVersion');

        return $value;
    }

    /**
     * Sets The asset library version associated with the image asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetVersion(?string $value): self
    {
        $this->setAttribute('assetVersion', $value);

        return $this;
    }

    /**
     * Returns The cropping and positioning properties associated with the asset..
     *
     * @return list<CreateFormatProperties>|null
     */
    public function getFormatProperties(): ?array
    {
        /** @var list<CreateFormatProperties>|null $value */
        $value = $this->getAttribute('formatProperties');

        return $value;
    }

    /**
     * Sets The cropping and positioning properties associated with the asset..
     *
     * @param list<CreateFormatProperties>|null $value New property value.
     * @return $this
     */
    public function setFormatProperties(?array $value): self
    {
        $this->setAttribute('formatProperties', $value);

        return $this;
    }
}
