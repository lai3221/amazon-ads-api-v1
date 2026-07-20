<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the brand suitability risk levels of content being viewed.
 *
 * @generated from Amazon Ads API v1 schema BrandSafetyTierTarget.
 */
final class BrandSafetyTierTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandSafetyTierTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandSafetyTier' => [
            'type' => 'enum',
            'class' => BrandSafetyTier::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the brandSafetyTier value.
     *
     * @return BrandSafetyTier|null
     */
    public function getBrandSafetyTier(): ?BrandSafetyTier
    {
        /** @var BrandSafetyTier|null $value */
        $value = $this->getAttribute('brandSafetyTier');

        return $value;
    }

    /**
     * Sets the brandSafetyTier value.
     *
     * @param BrandSafetyTier|string|null $value New property value.
     * @return $this
     */
    public function setBrandSafetyTier(BrandSafetyTier|string|null $value): self
    {
        $this->setAttribute('brandSafetyTier', $value);

        return $this;
    }
}
