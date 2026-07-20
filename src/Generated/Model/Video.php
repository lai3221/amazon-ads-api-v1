<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Video schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Video.
 */
final class Video extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Video';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'assetVersion' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'headline' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The asset library ID associated with the video asset..
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
     * Sets The asset library ID associated with the video asset..
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
     * Returns The asset library version associated with the video asset..
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
     * Sets The asset library version associated with the video asset..
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
     * Returns The description of the video content..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets The description of the video content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns The headline/custom text associated with the video..
     *
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headline');

        return $value;
    }

    /**
     * Sets The headline/custom text associated with the video..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadline(?string $value): self
    {
        $this->setAttribute('headline', $value);

        return $this;
    }
}
