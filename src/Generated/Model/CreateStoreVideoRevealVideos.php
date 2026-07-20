<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Collection of video assets for different device types.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreVideoRevealVideos.
 */
final class CreateStoreVideoRevealVideos extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreVideoRevealVideos';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'desktop' => [
            'type' => 'model',
            'class' => CreateStoreVideoRevealVRVideo::class,
            'required' => true,
            'nullable' => false,
        ],
        'mobile' => [
            'type' => 'model',
            'class' => CreateStoreVideoRevealVRVideo::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the desktop value.
     *
     * @return CreateStoreVideoRevealVRVideo|null
     */
    public function getDesktop(): ?CreateStoreVideoRevealVRVideo
    {
        /** @var CreateStoreVideoRevealVRVideo|null $value */
        $value = $this->getAttribute('desktop');

        return $value;
    }

    /**
     * Sets the desktop value.
     *
     * @param CreateStoreVideoRevealVRVideo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDesktop(CreateStoreVideoRevealVRVideo|array|null $value): self
    {
        $this->setAttribute('desktop', $value);

        return $this;
    }

    /**
     * Returns the mobile value.
     *
     * @return CreateStoreVideoRevealVRVideo|null
     */
    public function getMobile(): ?CreateStoreVideoRevealVRVideo
    {
        /** @var CreateStoreVideoRevealVRVideo|null $value */
        $value = $this->getAttribute('mobile');

        return $value;
    }

    /**
     * Sets the mobile value.
     *
     * @param CreateStoreVideoRevealVRVideo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobile(CreateStoreVideoRevealVRVideo|array|null $value): self
    {
        $this->setAttribute('mobile', $value);

        return $this;
    }
}
