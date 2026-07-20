<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateProductCollectionLandingPage schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateProductCollectionLandingPage.
 */
final class CreateProductCollectionLandingPage extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductCollectionLandingPage';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'landingPageAsins' => [
            'type' => 'model',
            'class' => CreateLandingPageAsins::class,
            'required' => false,
            'nullable' => false,
        ],
        'landingPageType' => [
            'type' => 'enum',
            'class' => ProductCollectionLandingPageType::class,
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
     * Returns the landingPageAsins value.
     *
     * @return CreateLandingPageAsins|null
     */
    public function getLandingPageAsins(): ?CreateLandingPageAsins
    {
        /** @var CreateLandingPageAsins|null $value */
        $value = $this->getAttribute('landingPageAsins');

        return $value;
    }

    /**
     * Sets the landingPageAsins value.
     *
     * @param CreateLandingPageAsins|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLandingPageAsins(CreateLandingPageAsins|array|null $value): self
    {
        $this->setAttribute('landingPageAsins', $value);

        return $this;
    }

    /**
     * Returns the landingPageType value.
     *
     * @return ProductCollectionLandingPageType|null
     */
    public function getLandingPageType(): ?ProductCollectionLandingPageType
    {
        /** @var ProductCollectionLandingPageType|null $value */
        $value = $this->getAttribute('landingPageType');

        return $value;
    }

    /**
     * Sets the landingPageType value.
     *
     * @param ProductCollectionLandingPageType|string|null $value New property value.
     * @return $this
     */
    public function setLandingPageType(ProductCollectionLandingPageType|string|null $value): self
    {
        $this->setAttribute('landingPageType', $value);

        return $this;
    }

    /**
     * Returns The URL associated to the landing page. Read only if landingPageType is ASIN LIST..
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
     * Sets The URL associated to the landing page. Read only if landingPageType is ASIN LIST..
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
