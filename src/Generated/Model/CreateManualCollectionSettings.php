<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Settings for manually curated collections.
 *
 * @generated from Amazon Ads API v1 schema CreateManualCollectionSettings.
 */
final class CreateManualCollectionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateManualCollectionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'landingPage' => [
            'type' => 'model',
            'class' => CreateCollectionLandingPage::class,
            'required' => true,
            'nullable' => false,
        ],
        'productInclusions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateAdvertisedProducts::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 3,
            'maxItems' => 10,
        ],
        'sharedSettings' => [
            'type' => 'model',
            'class' => CreateSharedCollectionSettings::class,
            'required' => true,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the landingPage value.
     *
     * @return CreateCollectionLandingPage|null
     */
    public function getLandingPage(): ?CreateCollectionLandingPage
    {
        /** @var CreateCollectionLandingPage|null $value */
        $value = $this->getAttribute('landingPage');

        return $value;
    }

    /**
     * Sets the landingPage value.
     *
     * @param CreateCollectionLandingPage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPage(CreateCollectionLandingPage|array|null $value): self
    {
        $this->setAttribute('landingPage', $value);

        return $this;
    }

    /**
     * Returns The products featured in the ad. Required for manual collections..
     *
     * @return list<CreateAdvertisedProducts>|null
     */
    public function getProductInclusions(): ?array
    {
        /** @var list<CreateAdvertisedProducts>|null $value */
        $value = $this->getAttribute('productInclusions');

        return $value;
    }

    /**
     * Sets The products featured in the ad. Required for manual collections..
     *
     * @param list<CreateAdvertisedProducts>|null $value New property value.
     * @return $this
     */
    public function setProductInclusions(?array $value): self
    {
        $this->setAttribute('productInclusions', $value);

        return $this;
    }

    /**
     * Returns the sharedSettings value.
     *
     * @return CreateSharedCollectionSettings|null
     */
    public function getSharedSettings(): ?CreateSharedCollectionSettings
    {
        /** @var CreateSharedCollectionSettings|null $value */
        $value = $this->getAttribute('sharedSettings');

        return $value;
    }

    /**
     * Sets the sharedSettings value.
     *
     * @param CreateSharedCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSharedSettings(CreateSharedCollectionSettings|array|null $value): self
    {
        $this->setAttribute('sharedSettings', $value);

        return $this;
    }

    /**
     * Returns Optional title for the collection. If not provided, title will be auto-generated..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Optional title for the collection. If not provided, title will be auto-generated..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }
}
