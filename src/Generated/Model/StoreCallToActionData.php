<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreCallToActionData schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreCallToActionData.
 */
final class StoreCallToActionData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreCallToActionData';

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
        'pageId' => [
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
     * Returns Page identifier..
     *
     * @return string|null
     */
    public function getPageId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pageId');

        return $value;
    }

    /**
     * Sets Page identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPageId(?string $value): self
    {
        $this->setAttribute('pageId', $value);

        return $this;
    }

    /**
     * Returns ASIN for the call to action..
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
     * Sets ASIN for the call to action..
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
