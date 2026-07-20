<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMarketplaceStringValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMarketplaceStringValue.
 */
final class CreateMarketplaceStringValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMarketplaceStringValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'defaultValue' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The default value. Either the default value or the marketplace settings should always be specified..
     *
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('defaultValue');

        return $value;
    }

    /**
     * Sets The default value. Either the default value or the marketplace settings should always be specified..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDefaultValue(?string $value): self
    {
        $this->setAttribute('defaultValue', $value);

        return $this;
    }
}
