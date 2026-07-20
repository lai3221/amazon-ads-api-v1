<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreCallToActionProductData schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreCallToActionProductData.
 */
final class StoreCallToActionProductData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreCallToActionProductData';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'customUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productAsin' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'text' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Custom URL for the call to action..
     *
     * @return string|null
     */
    public function getCustomUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('customUrl');

        return $value;
    }

    /**
     * Sets Custom URL for the call to action..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCustomUrl(?string $value): self
    {
        $this->setAttribute('customUrl', $value);

        return $this;
    }

    /**
     * Returns Product ASIN for the call to action..
     *
     * @return string|null
     */
    public function getProductAsin(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productAsin');

        return $value;
    }

    /**
     * Sets Product ASIN for the call to action..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductAsin(?string $value): self
    {
        $this->setAttribute('productAsin', $value);

        return $this;
    }

    /**
     * Returns Call to action text..
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('text');

        return $value;
    }

    /**
     * Sets Call to action text..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setText(?string $value): self
    {
        $this->setAttribute('text', $value);

        return $this;
    }
}
