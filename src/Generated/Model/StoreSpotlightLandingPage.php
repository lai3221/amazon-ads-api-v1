<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreSpotlightLandingPage schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreSpotlightLandingPage.
 */
final class StoreSpotlightLandingPage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreSpotlightLandingPage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'landingPageType' => [
            'type' => 'enum',
            'class' => StoreSpotlightLandingPageType::class,
            'required' => true,
            'nullable' => false,
        ],
        'landingPageUrl' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the landingPageType value.
     *
     * @return StoreSpotlightLandingPageType|null
     */
    public function getLandingPageType(): ?StoreSpotlightLandingPageType
    {
        /** @var StoreSpotlightLandingPageType|null $value */
        $value = $this->getAttribute('landingPageType');

        return $value;
    }

    /**
     * Sets the landingPageType value.
     *
     * @param StoreSpotlightLandingPageType|string|null $value New property value.
     * @return $this
     */
    public function setLandingPageType(StoreSpotlightLandingPageType|string|null $value): self
    {
        $this->setAttribute('landingPageType', $value);

        return $this;
    }

    /**
     * Returns The URL of landing page where the ad directs..
     *
     * @return string|null
     */
    public function getLandingPageUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('landingPageUrl');

        return $value;
    }

    /**
     * Sets The URL of landing page where the ad directs..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLandingPageUrl(?string $value): self
    {
        $this->setAttribute('landingPageUrl', $value);

        return $this;
    }
}
