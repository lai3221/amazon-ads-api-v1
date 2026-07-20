<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdvertisingDealPrice schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdvertisingDealPrice.
 */
final class CreateAdvertisingDealPrice extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdvertisingDealPrice';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'priceType' => [
            'type' => 'enum',
            'class' => AdvertisingDealPriceType::class,
            'required' => true,
            'nullable' => false,
        ],
        'value' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the currencyCode value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyCode');

        return $value;
    }

    /**
     * Sets the currencyCode value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyCode(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyCode', $value);

        return $this;
    }

    /**
     * Returns the priceType value.
     *
     * @return AdvertisingDealPriceType|null
     */
    public function getPriceType(): ?AdvertisingDealPriceType
    {
        /** @var AdvertisingDealPriceType|null $value */
        $value = $this->getAttribute('priceType');

        return $value;
    }

    /**
     * Sets the priceType value.
     *
     * @param AdvertisingDealPriceType|string|null $value New property value.
     * @return $this
     */
    public function setPriceType(AdvertisingDealPriceType|string|null $value): self
    {
        $this->setAttribute('priceType', $value);

        return $this;
    }

    /**
     * Returns The monetary amount of the price in the given currency..
     *
     * @return int|float|null
     */
    public function getValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('value');

        return $value;
    }

    /**
     * Sets The monetary amount of the price in the given currency..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setValue(int|float|null $value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
