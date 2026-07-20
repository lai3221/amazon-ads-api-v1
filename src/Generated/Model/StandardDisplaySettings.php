<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StandardDisplaySettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StandardDisplaySettings.
 */
final class StandardDisplaySettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StandardDisplaySettings';

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
        'callToAction' => [
            'type' => 'model',
            'class' => DisplayCallToAction::class,
            'required' => false,
            'nullable' => false,
        ],
        'clickTrackingUrls' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreativeTrackingUrl::class,
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
                'class' => Size::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
        'customImages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Image::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
        'impressionTrackingUrls' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreativeTrackingUrl::class,
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
     * Returns the callToAction value.
     *
     * @return DisplayCallToAction|null
     */
    public function getCallToAction(): ?DisplayCallToAction
    {
        /** @var DisplayCallToAction|null $value */
        $value = $this->getAttribute('callToAction');

        return $value;
    }

    /**
     * Sets the callToAction value.
     *
     * @param DisplayCallToAction|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCallToAction(DisplayCallToAction|array|null $value): self
    {
        $this->setAttribute('callToAction', $value);

        return $this;
    }

    /**
     * Returns The third party urls to trigger when an click is recorded..
     *
     * @return list<CreativeTrackingUrl>|null
     */
    public function getClickTrackingUrls(): ?array
    {
        /** @var list<CreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('clickTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an click is recorded..
     *
     * @param list<CreativeTrackingUrl>|null $value New property value.
     * @return $this
     */
    public function setClickTrackingUrls(?array $value): self
    {
        $this->setAttribute('clickTrackingUrls', $value);

        return $this;
    }

    /**
     * Returns The list of placement sizes this creative should serve on..
     *
     * @return list<Size>|null
     */
    public function getCreativeSizes(): ?array
    {
        /** @var list<Size>|null $value */
        $value = $this->getAttribute('creativeSizes');

        return $value;
    }

    /**
     * Sets The list of placement sizes this creative should serve on..
     *
     * @param list<Size>|null $value New property value.
     * @return $this
     */
    public function setCreativeSizes(?array $value): self
    {
        $this->setAttribute('creativeSizes', $value);

        return $this;
    }

    /**
     * Returns The custom images to use for the standard display experience..
     *
     * @return list<Image>|null
     */
    public function getCustomImages(): ?array
    {
        /** @var list<Image>|null $value */
        $value = $this->getAttribute('customImages');

        return $value;
    }

    /**
     * Sets The custom images to use for the standard display experience..
     *
     * @param list<Image>|null $value New property value.
     * @return $this
     */
    public function setCustomImages(?array $value): self
    {
        $this->setAttribute('customImages', $value);

        return $this;
    }

    /**
     * Returns The third party urls to trigger when an impression is recorded..
     *
     * @return list<CreativeTrackingUrl>|null
     */
    public function getImpressionTrackingUrls(): ?array
    {
        /** @var list<CreativeTrackingUrl>|null $value */
        $value = $this->getAttribute('impressionTrackingUrls');

        return $value;
    }

    /**
     * Sets The third party urls to trigger when an impression is recorded..
     *
     * @param list<CreativeTrackingUrl>|null $value New property value.
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
}
