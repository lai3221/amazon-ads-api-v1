<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Values for a location index where the indexValue is calculated from the constituents.
 *
 * @generated from Amazon Ads API v1 schema ConstituentIndexValue.
 */
final class ConstituentIndexValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ConstituentIndexValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandSales' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'categorySales' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'postalCode' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The brand sales value for the postal code..
     *
     * @return int|float|null
     */
    public function getBrandSales(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('brandSales');

        return $value;
    }

    /**
     * Sets The brand sales value for the postal code..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setBrandSales(int|float|null $value): self
    {
        $this->setAttribute('brandSales', $value);

        return $this;
    }

    /**
     * Returns The category sales value for the postal code..
     *
     * @return int|float|null
     */
    public function getCategorySales(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('categorySales');

        return $value;
    }

    /**
     * Sets The category sales value for the postal code..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setCategorySales(int|float|null $value): self
    {
        $this->setAttribute('categorySales', $value);

        return $this;
    }

    /**
     * Returns The postal code for the location index prefixed by country code (i.e. US-10118)..
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('postalCode');

        return $value;
    }

    /**
     * Sets The postal code for the location index prefixed by country code (i.e. US-10118)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPostalCode(?string $value): self
    {
        $this->setAttribute('postalCode', $value);

        return $this;
    }
}
