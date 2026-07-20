<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStorePageMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStorePageMultiStatusSuccess.
 */
final class BrandStorePageMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStorePageMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStorePage' => [
            'type' => 'model',
            'class' => BrandStorePage::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 0,
        ],
    ];

    /**
     * Returns the brandStorePage value.
     *
     * @return BrandStorePage|null
     */
    public function getBrandStorePage(): ?BrandStorePage
    {
        /** @var BrandStorePage|null $value */
        $value = $this->getAttribute('brandStorePage');

        return $value;
    }

    /**
     * Sets the brandStorePage value.
     *
     * @param BrandStorePage|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBrandStorePage(BrandStorePage|array|null $value): self
    {
        $this->setAttribute('brandStorePage', $value);

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
