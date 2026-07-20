<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Layout configuration for desktop and mobile views.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreProductSelectorLayoutConfiguration.
 */
final class CreateStoreProductSelectorLayoutConfiguration extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreProductSelectorLayoutConfiguration';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'desktopLayout' => [
            'type' => 'enum',
            'class' => StoreProductSelectorImageLayout::class,
            'required' => true,
            'nullable' => false,
        ],
        'mobileLayout' => [
            'type' => 'enum',
            'class' => StoreProductSelectorImageLayout::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the desktopLayout value.
     *
     * @return StoreProductSelectorImageLayout|null
     */
    public function getDesktopLayout(): ?StoreProductSelectorImageLayout
    {
        /** @var StoreProductSelectorImageLayout|null $value */
        $value = $this->getAttribute('desktopLayout');

        return $value;
    }

    /**
     * Sets the desktopLayout value.
     *
     * @param StoreProductSelectorImageLayout|string|null $value New property value.
     * @return $this
     */
    public function setDesktopLayout(StoreProductSelectorImageLayout|string|null $value): self
    {
        $this->setAttribute('desktopLayout', $value);

        return $this;
    }

    /**
     * Returns the mobileLayout value.
     *
     * @return StoreProductSelectorImageLayout|null
     */
    public function getMobileLayout(): ?StoreProductSelectorImageLayout
    {
        /** @var StoreProductSelectorImageLayout|null $value */
        $value = $this->getAttribute('mobileLayout');

        return $value;
    }

    /**
     * Sets the mobileLayout value.
     *
     * @param StoreProductSelectorImageLayout|string|null $value New property value.
     * @return $this
     */
    public function setMobileLayout(StoreProductSelectorImageLayout|string|null $value): self
    {
        $this->setAttribute('mobileLayout', $value);

        return $this;
    }
}
