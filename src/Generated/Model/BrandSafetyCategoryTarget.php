<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on, if any, the classifications of unsuitable contexts that may pose a risk to a brand's reputation of content being viewed.
 *
 * @generated from Amazon Ads API v1 schema BrandSafetyCategoryTarget.
 */
final class BrandSafetyCategoryTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandSafetyCategoryTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandSafetyCategory' => [
            'type' => 'enum',
            'class' => BrandSafetyCategory::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the brandSafetyCategory value.
     *
     * @return BrandSafetyCategory|null
     */
    public function getBrandSafetyCategory(): ?BrandSafetyCategory
    {
        /** @var BrandSafetyCategory|null $value */
        $value = $this->getAttribute('brandSafetyCategory');

        return $value;
    }

    /**
     * Sets the brandSafetyCategory value.
     *
     * @param BrandSafetyCategory|string|null $value New property value.
     * @return $this
     */
    public function setBrandSafetyCategory(BrandSafetyCategory|string|null $value): self
    {
        $this->setAttribute('brandSafetyCategory', $value);

        return $this;
    }
}
