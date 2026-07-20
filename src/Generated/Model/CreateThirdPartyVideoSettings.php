<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateThirdPartyVideoSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateThirdPartyVideoSettings.
 */
final class CreateThirdPartyVideoSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThirdPartyVideoSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'impressionTrackingUrls' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateCreativeTrackingUrl::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'language' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => true,
            'nullable' => false,
        ],
        'publisherHostedCreativeSource' => [
            'type' => 'enum',
            'class' => PublisherHostedCreativeSource::class,
            'required' => false,
            'nullable' => false,
        ],
        'vastUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The third party urls to trigger when an impression is recorded..
     *
     * @return list<CreateCreativeTrackingUrl>|null
     */
    public function getImpressionTrackingUrls(): ?array
    {
        /** @var list<CreateCreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('impressionTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an impression is recorded..
     *
     * @param list<CreateCreativeTrackingUrl>|null $value New property value.
     * @return $this
     */
    public function setImpressionTrackingUrls(?array $value): self
    {
        $this->setAttribute('impressionTrackingUrls', $value);

        return $this;
    }

    /**
     * Returns the language value.
     *
     * @return LanguageLocale|null
     */
    public function getLanguage(): ?LanguageLocale
    {
        /** @var LanguageLocale|null $value */
        $value = $this->getAttribute('language');

        return $value;
    }

    /**
     * Sets the language value.
     *
     * @param LanguageLocale|string|null $value New property value.
     * @return $this
     */
    public function setLanguage(LanguageLocale|string|null $value): self
    {
        $this->setAttribute('language', $value);

        return $this;
    }

    /**
     * Returns the publisherHostedCreativeSource value.
     *
     * @return PublisherHostedCreativeSource|null
     */
    public function getPublisherHostedCreativeSource(): ?PublisherHostedCreativeSource
    {
        /** @var PublisherHostedCreativeSource|null $value */
        $value = $this->getAttribute('publisherHostedCreativeSource');

        return $value;
    }

    /**
     * Sets the publisherHostedCreativeSource value.
     *
     * @param PublisherHostedCreativeSource|string|null $value New property value.
     * @return $this
     */
    public function setPublisherHostedCreativeSource(PublisherHostedCreativeSource|string|null $value): self
    {
        $this->setAttribute('publisherHostedCreativeSource', $value);

        return $this;
    }

    /**
     * Returns The url to use to fetch the VAST XML for this video creative. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @return string|null
     */
    public function getVastUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('vastUrl');

        return $value;
    }

    /**
     * Sets The url to use to fetch the VAST XML for this video creative. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVastUrl(?string $value): self
    {
        $this->setAttribute('vastUrl', $value);

        return $this;
    }
}
