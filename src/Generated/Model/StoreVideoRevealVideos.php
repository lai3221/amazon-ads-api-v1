<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Collection of video assets for different device types.
 *
 * @generated from Amazon Ads API v1 schema StoreVideoRevealVideos.
 */
final class StoreVideoRevealVideos extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreVideoRevealVideos';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'desktop' => [
            'type' => 'model',
            'class' => StoreVideoRevealVRVideo::class,
            'required' => true,
            'nullable' => false,
        ],
        'mobile' => [
            'type' => 'model',
            'class' => StoreVideoRevealVRVideo::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the desktop value.
     *
     * @return StoreVideoRevealVRVideo|null
     */
    public function getDesktop(): ?StoreVideoRevealVRVideo
    {
        /** @var StoreVideoRevealVRVideo|null $value */
        $value = $this->getAttribute('desktop');

        return $value;
    }

    /**
     * Sets the desktop value.
     *
     * @param StoreVideoRevealVRVideo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDesktop(StoreVideoRevealVRVideo|array|null $value): self
    {
        $this->setAttribute('desktop', $value);

        return $this;
    }

    /**
     * Returns the mobile value.
     *
     * @return StoreVideoRevealVRVideo|null
     */
    public function getMobile(): ?StoreVideoRevealVRVideo
    {
        /** @var StoreVideoRevealVRVideo|null $value */
        $value = $this->getAttribute('mobile');

        return $value;
    }

    /**
     * Sets the mobile value.
     *
     * @param StoreVideoRevealVRVideo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMobile(StoreVideoRevealVRVideo|array|null $value): self
    {
        $this->setAttribute('mobile', $value);

        return $this;
    }
}
