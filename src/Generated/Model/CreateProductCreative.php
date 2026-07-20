<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateProductCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateProductCreative.
 */
final class CreateProductCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateProductCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productCreativeSettings' => [
            'type' => 'model',
            'class' => CreateProductCreativeSettings::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the productCreativeSettings value.
     *
     * @return CreateProductCreativeSettings|null
     */
    public function getProductCreativeSettings(): ?CreateProductCreativeSettings
    {
        /** @var CreateProductCreativeSettings|null $value */
        $value = $this->getAttribute('productCreativeSettings');

        return $value;
    }

    /**
     * Sets the productCreativeSettings value.
     *
     * @param CreateProductCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCreativeSettings(CreateProductCreativeSettings|array|null $value): self
    {
        $this->setAttribute('productCreativeSettings', $value);

        return $this;
    }
}
