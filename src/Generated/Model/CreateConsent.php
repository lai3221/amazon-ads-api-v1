<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Describes consent given by the user associated with the conversion event to have their data used for advertising purposes. For EU advertisers, it is required to provide one of geo, amazonConsent, tcf, or gpp.
 *
 * @generated from Amazon Ads API v1 schema CreateConsent.
 */
final class CreateConsent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateConsent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'amazonConsent' => [
            'type' => 'model',
            'class' => CreateAmazonConsentFormat::class,
            'required' => false,
            'nullable' => false,
        ],
        'geo' => [
            'type' => 'model',
            'class' => CreateGeographicConsentData::class,
            'required' => false,
            'nullable' => false,
        ],
        'gpp' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'tcf' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the amazonConsent value.
     *
     * @return CreateAmazonConsentFormat|null
     */
    public function getAmazonConsent(): ?CreateAmazonConsentFormat
    {
        /** @var CreateAmazonConsentFormat|null $value */
        $value = $this->getAttribute('amazonConsent');

        return $value;
    }

    /**
     * Sets the amazonConsent value.
     *
     * @param CreateAmazonConsentFormat|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAmazonConsent(CreateAmazonConsentFormat|array|null $value): self
    {
        $this->setAttribute('amazonConsent', $value);

        return $this;
    }

    /**
     * Returns the geo value.
     *
     * @return CreateGeographicConsentData|null
     */
    public function getGeo(): ?CreateGeographicConsentData
    {
        /** @var CreateGeographicConsentData|null $value */
        $value = $this->getAttribute('geo');

        return $value;
    }

    /**
     * Sets the geo value.
     *
     * @param CreateGeographicConsentData|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setGeo(CreateGeographicConsentData|array|null $value): self
    {
        $this->setAttribute('geo', $value);

        return $this;
    }

    /**
     * Returns An encoded Global Privacy Platform (GPP) string describing what the user has consented to. This string encapsulates user privacy preferences and consent information in a compact format..
     *
     * @return string|null
     */
    public function getGpp(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('gpp');

        return $value;
    }

    /**
     * Sets An encoded Global Privacy Platform (GPP) string describing what the user has consented to. This string encapsulates user privacy preferences and consent information in a compact format..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGpp(?string $value): self
    {
        $this->setAttribute('gpp', $value);

        return $this;
    }

    /**
     * Returns An encoded Transparency and Consent Framework (TCF) string describing what the user has consented to. This string contains information about user consent choices in a compressed format..
     *
     * @return string|null
     */
    public function getTcf(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tcf');

        return $value;
    }

    /**
     * Sets An encoded Transparency and Consent Framework (TCF) string describing what the user has consented to. This string contains information about user consent choices in a compressed format..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTcf(?string $value): self
    {
        $this->setAttribute('tcf', $value);

        return $this;
    }
}
