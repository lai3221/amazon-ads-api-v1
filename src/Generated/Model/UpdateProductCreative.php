<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateProductCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateProductCreative.
 */
final class UpdateProductCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateProductCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productCreativeSettings' => [
            'type' => 'model',
            'class' => UpdateProductCreativeSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the productCreativeSettings value.
     *
     * @return UpdateProductCreativeSettings|null
     */
    public function getProductCreativeSettings(): ?UpdateProductCreativeSettings
    {
        /** @var UpdateProductCreativeSettings|null $value */
        $value = $this->getAttribute('productCreativeSettings');

        return $value;
    }

    /**
     * Sets the productCreativeSettings value.
     *
     * @param UpdateProductCreativeSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductCreativeSettings(UpdateProductCreativeSettings|array|null $value): self
    {
        $this->setAttribute('productCreativeSettings', $value);

        return $this;
    }
}
