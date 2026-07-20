<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateVideoLandingPage schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateVideoLandingPage.
 */
final class CreateVideoLandingPage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateVideoLandingPage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'landingPageType' => [
            'type' => 'enum',
            'class' => VideoLandingPageType::class,
            'required' => true,
            'nullable' => false,
        ],
        'landingPageUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the landingPageType value.
     *
     * @return VideoLandingPageType|null
     */
    public function getLandingPageType(): ?VideoLandingPageType
    {
        /** @var VideoLandingPageType|null $value */
        $value = $this->getAttribute('landingPageType');

        return $value;
    }

    /**
     * Sets the landingPageType value.
     *
     * @param VideoLandingPageType|string|null $value New property value.
     * @return $this
     */
    public function setLandingPageType(VideoLandingPageType|string|null $value): self
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
