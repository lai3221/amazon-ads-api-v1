<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ClickToUrlAudioCallToActionSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ClickToUrlAudioCallToActionSettings.
 */
final class ClickToUrlAudioCallToActionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ClickToUrlAudioCallToActionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'url' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The url to redirect the user via the audio CallToAction..
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
     * Sets The url to redirect the user via the audio CallToAction..
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
