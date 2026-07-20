<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdSettings.
 */
final class AdSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productAttributeSetRefinementConfigurationId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Identifier for the product attribute configuration set associated with this ad group..
     *
     * @return string|null
     */
    public function getProductAttributeSetRefinementConfigurationId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productAttributeSetRefinementConfigurationId');

        return $value;
    }

    /**
     * Sets Identifier for the product attribute configuration set associated with this ad group..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductAttributeSetRefinementConfigurationId(?string $value): self
    {
        $this->setAttribute('productAttributeSetRefinementConfigurationId', $value);

        return $this;
    }
}
