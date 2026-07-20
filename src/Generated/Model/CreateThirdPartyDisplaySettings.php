<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateThirdPartyDisplaySettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateThirdPartyDisplaySettings.
 */
final class CreateThirdPartyDisplaySettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThirdPartyDisplaySettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adChoicesPosition' => [
            'type' => 'enum',
            'class' => AdChoicesPosition::class,
            'required' => true,
            'nullable' => false,
        ],
        'additionalHtml' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'clickTrackingUrls' => [
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
        'creativeSizes' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateSize::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
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
        'thirdPartyTagHostingSource' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adChoicesPosition value.
     *
     * @return AdChoicesPosition|null
     */
    public function getAdChoicesPosition(): ?AdChoicesPosition
    {
        /** @var AdChoicesPosition|null $value */
        $value = $this->getAttribute('adChoicesPosition');

        return $value;
    }

    /**
     * Sets the adChoicesPosition value.
     *
     * @param AdChoicesPosition|string|null $value New property value.
     * @return $this
     */
    public function setAdChoicesPosition(AdChoicesPosition|string|null $value): self
    {
        $this->setAttribute('adChoicesPosition', $value);

        return $this;
    }

    /**
     * Returns Additional html to be included along with the creative when rendered..
     *
     * @return string|null
     */
    public function getAdditionalHtml(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('additionalHtml');

        return $value;
    }

    /**
     * Sets Additional html to be included along with the creative when rendered..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdditionalHtml(?string $value): self
    {
        $this->setAttribute('additionalHtml', $value);

        return $this;
    }

    /**
     * Returns The third party urls to trigger when an click is recorded..
     *
     * @return list<CreateCreativeTrackingUrl>|null
     */
    public function getClickTrackingUrls(): ?array
    {
        /** @var list<CreateCreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('clickTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an click is recorded..
     *
     * @param list<CreateCreativeTrackingUrl>|null $value New property value.
     * @return $this
     */
    public function setClickTrackingUrls(?array $value): self
    {
        $this->setAttribute('clickTrackingUrls', $value);

        return $this;
    }

    /**
     * Returns The list of placement sizes this creative should serve on. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @return list<CreateSize>|null
     */
    public function getCreativeSizes(): ?array
    {
        /** @var list<CreateSize>|null $value */
        $value = $this->getAttribute('creativeSizes');

        return $value;
    }

    /**
     * Sets The list of placement sizes this creative should serve on. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @param list<CreateSize>|null $value New property value.
     * @return $this
     */
    public function setCreativeSizes(?array $value): self
    {
        $this->setAttribute('creativeSizes', $value);

        return $this;
    }

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
     * Returns The html tag to use to fetch this creative from the 3p ad server. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @return string|null
     */
    public function getThirdPartyTagHostingSource(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('thirdPartyTagHostingSource');

        return $value;
    }

    /**
     * Sets The html tag to use to fetch this creative from the 3p ad server. Required for non publisher hosted creatives (when publisherHostedCreativeSource is not set)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setThirdPartyTagHostingSource(?string $value): self
    {
        $this->setAttribute('thirdPartyTagHostingSource', $value);

        return $this;
    }
}
