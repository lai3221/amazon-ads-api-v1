<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Configuration for displaying product selector results.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorResults.
 */
final class StoreProductSelectorResults extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorResults';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'buttonText' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'disclaimer' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'headline' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'storeUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Text to display on the call-to-action button..
     *
     * @return string|null
     */
    public function getButtonText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('buttonText');

        return $value;
    }

    /**
     * Sets Text to display on the call-to-action button..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setButtonText(?string $value): self
    {
        $this->setAttribute('buttonText', $value);

        return $this;
    }

    /**
     * Returns Descriptive text explaining the results..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Descriptive text explaining the results..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns Legal or additional information text for the results..
     *
     * @return string|null
     */
    public function getDisclaimer(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('disclaimer');

        return $value;
    }

    /**
     * Sets Legal or additional information text for the results..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDisclaimer(?string $value): self
    {
        $this->setAttribute('disclaimer', $value);

        return $this;
    }

    /**
     * Returns Main heading text for the results section..
     *
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headline');

        return $value;
    }

    /**
     * Sets Main heading text for the results section..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadline(?string $value): self
    {
        $this->setAttribute('headline', $value);

        return $this;
    }

    /**
     * Returns URL to the store page for the selected products..
     *
     * @return string|null
     */
    public function getStoreUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('storeUrl');

        return $value;
    }

    /**
     * Sets URL to the store page for the selected products..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStoreUrl(?string $value): self
    {
        $this->setAttribute('storeUrl', $value);

        return $this;
    }
}
