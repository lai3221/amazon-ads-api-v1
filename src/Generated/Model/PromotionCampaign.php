<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents a promotional campaign that offers click credits to advertisers based on meeting specific spending thresholds within a defined timeframe. Supports both single-tier and multi-tier reward structures for different ad products and marketplaces.
 *
 * @generated from Amazon Ads API v1 schema PromotionCampaign.
 */
final class PromotionCampaign extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionCampaign';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'tncUrl' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return AdProduct|null
     */
    public function getAdProduct(): ?AdProduct
    {
        /** @var AdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param AdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(AdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns Title of the promotion campaign..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Title of the promotion campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }

    /**
     * Returns The Url of the Terms and condition page for the promotion campaign..
     *
     * @return string|null
     */
    public function getTncUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tncUrl');

        return $value;
    }

    /**
     * Sets The Url of the Terms and condition page for the promotion campaign..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTncUrl(?string $value): self
    {
        $this->setAttribute('tncUrl', $value);

        return $this;
    }
}
