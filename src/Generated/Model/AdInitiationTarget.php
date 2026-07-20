<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on how the video ad will be started.
 *
 * @generated from Amazon Ads API v1 schema AdInitiationTarget.
 */
final class AdInitiationTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdInitiationTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'videoInitiationType' => [
            'type' => 'enum',
            'class' => VideoInitiationType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the videoInitiationType value.
     *
     * @return VideoInitiationType|null
     */
    public function getVideoInitiationType(): ?VideoInitiationType
    {
        /** @var VideoInitiationType|null $value */
        $value = $this->getAttribute('videoInitiationType');

        return $value;
    }

    /**
     * Sets the videoInitiationType value.
     *
     * @param VideoInitiationType|string|null $value New property value.
     * @return $this
     */
    public function setVideoInitiationType(VideoInitiationType|string|null $value): self
    {
        $this->setAttribute('videoInitiationType', $value);

        return $this;
    }
}
