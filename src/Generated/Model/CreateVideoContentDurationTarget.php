<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets ads to a specific video content duration.
 *
 * @generated from Amazon Ads API v1 schema CreateVideoContentDurationTarget.
 */
final class CreateVideoContentDurationTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateVideoContentDurationTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'duration' => [
            'type' => 'enum',
            'class' => VideoContentDuration::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the duration value.
     *
     * @return VideoContentDuration|null
     */
    public function getDuration(): ?VideoContentDuration
    {
        /** @var VideoContentDuration|null $value */
        $value = $this->getAttribute('duration');

        return $value;
    }

    /**
     * Sets the duration value.
     *
     * @param VideoContentDuration|string|null $value New property value.
     * @return $this
     */
    public function setDuration(VideoContentDuration|string|null $value): self
    {
        $this->setAttribute('duration', $value);

        return $this;
    }
}
