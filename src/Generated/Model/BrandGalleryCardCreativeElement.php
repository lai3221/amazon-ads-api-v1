<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandGalleryCardCreativeElement schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandGalleryCardCreativeElement.
 */
final class BrandGalleryCardCreativeElement extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandGalleryCardCreativeElement';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'customImage' => [
            'type' => 'model',
            'class' => Image::class,
            'required' => true,
            'nullable' => false,
        ],
        'headline' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'landingPage' => [
            'type' => 'model',
            'class' => StoreSpotlightLandingPage::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the customImage value.
     *
     * @return Image|null
     */
    public function getCustomImage(): ?Image
    {
        /** @var Image|null $value */
        $value = $this->getAttribute('customImage');

        return $value;
    }

    /**
     * Sets the customImage value.
     *
     * @param Image|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCustomImage(Image|array|null $value): self
    {
        $this->setAttribute('customImage', $value);

        return $this;
    }

    /**
     * Returns The headline used for the card..
     *
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headline');

        return $value;
    }

    /**
     * Sets The headline used for the card..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadline(?string $value): self
    {
        $this->setAttribute('headline', $value);

        return $this;
    }

    /**
     * Returns the landingPage value.
     *
     * @return StoreSpotlightLandingPage|null
     */
    public function getLandingPage(): ?StoreSpotlightLandingPage
    {
        /** @var StoreSpotlightLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param StoreSpotlightLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(StoreSpotlightLandingPage|array|null $value): self
    {
        $this->setAttribute('landingPage', $value);

        return $this;
    }
}
