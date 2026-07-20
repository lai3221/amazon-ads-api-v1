<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateLearnMoreVideoCallToActionSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateLearnMoreVideoCallToActionSettings.
 */
final class CreateLearnMoreVideoCallToActionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLearnMoreVideoCallToActionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'position' => [
            'type' => 'enum',
            'class' => VideoCallToActionPosition::class,
            'required' => true,
            'nullable' => false,
        ],
        'url' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the position value.
     *
     * @return VideoCallToActionPosition|null
     */
    public function getPosition(): ?VideoCallToActionPosition
    {
        /** @var VideoCallToActionPosition|null $value */
        $value = $this->getAttribute('position');

        return $value;
    }

    /**
     * Sets the position value.
     *
     * @param VideoCallToActionPosition|string|null $value New property value.
     * @return $this
     */
    public function setPosition(VideoCallToActionPosition|string|null $value): self
    {
        $this->setAttribute('position', $value);

        return $this;
    }

    /**
     * Returns The url to drive users to learn more via the video CallToAction..
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('url');

        return $value;
    }

    /**
     * Sets The url to drive users to learn more via the video CallToAction..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUrl(?string $value): self
    {
        $this->setAttribute('url', $value);

        return $this;
    }
}
