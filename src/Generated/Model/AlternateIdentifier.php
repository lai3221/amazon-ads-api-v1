<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Marketplace identifiers associated with advertising account, including profile ID, dsp advertiser ID and entity ID.
 *
 * @generated from Amazon Ads API v1 schema AlternateIdentifier.
 */
final class AlternateIdentifier extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AlternateIdentifier';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'countryCode' => [
            'type' => 'enum',
            'class' => CountryCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'dspAdvertiserId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'entityId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'profileId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'region' => [
            'type' => 'enum',
            'class' => RegionCode::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the countryCode value.
     *
     * @return CountryCode|null
     */
    public function getCountryCode(): ?CountryCode
    {
        /** @var CountryCode|null $value */
        $value = $this->getAttribute('countryCode');

        return $value;
    }

    /**
     * Sets the countryCode value.
     *
     * @param CountryCode|string|null $value New property value.
     * @return $this
     */
    public function setCountryCode(CountryCode|string|null $value): self
    {
        $this->setAttribute('countryCode', $value);

        return $this;
    }

    /**
     * Returns The regional ADSP advertiser identifier of the advertising account..
     *
     * @return string|null
     */
    public function getDspAdvertiserId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dspAdvertiserId');

        return $value;
    }

    /**
     * Sets The regional ADSP advertiser identifier of the advertising account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDspAdvertiserId(?string $value): self
    {
        $this->setAttribute('dspAdvertiserId', $value);

        return $this;
    }

    /**
     * Returns The marketplace entity identifier of the advertising account..
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('entityId');

        return $value;
    }

    /**
     * Sets The marketplace entity identifier of the advertising account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEntityId(?string $value): self
    {
        $this->setAttribute('entityId', $value);

        return $this;
    }

    /**
     * Returns The marketplace profile identifier of the advertising account..
     *
     * @return string|null
     */
    public function getProfileId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('profileId');

        return $value;
    }

    /**
     * Sets The marketplace profile identifier of the advertising account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProfileId(?string $value): self
    {
        $this->setAttribute('profileId', $value);

        return $this;
    }

    /**
     * Returns the region value.
     *
     * @return RegionCode|null
     */
    public function getRegion(): ?RegionCode
    {
        /** @var RegionCode|null $value */
        $value = $this->getAttribute('region');

        return $value;
    }

    /**
     * Sets the region value.
     *
     * @param RegionCode|string|null $value New property value.
     * @return $this
     */
    public function setRegion(RegionCode|string|null $value): self
    {
        $this->setAttribute('region', $value);

        return $this;
    }
}
