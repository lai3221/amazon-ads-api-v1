<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdMultiStatusSuccess.
 */
final class AdMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ad' => [
            'type' => 'model',
            'class' => Ad::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 999,
        ],
    ];

    /**
     * Returns the ad value.
     *
     * @return Ad|null
     */
    public function getAd(): ?Ad
    {
        /** @var Ad|null $value */
        $value = $this->getAttribute('ad');

        return $value;
    }

    /**
     * Sets the ad value.
     *
     * @param Ad|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAd(Ad|array|null $value): self
    {
        $this->setAttribute('ad', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
