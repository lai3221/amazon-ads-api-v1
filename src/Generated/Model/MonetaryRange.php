<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A monetary range with optional inclusive min and max bounds and a required currency code.
 *
 * @generated from Amazon Ads API v1 schema MonetaryRange.
 */
final class MonetaryRange extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MonetaryRange';

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
        'max' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'min' => [
            'type' => 'number',
            'required' => false,
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
     * Returns The maximum (inclusive) monetary value of the range..
     *
     * @return int|float|null
     */
    public function getMax(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('max');

        return $value;
    }

    /**
     * Sets The maximum (inclusive) monetary value of the range..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setMax(int|float|null $value): self
    {
        $this->setAttribute('max', $value);

        return $this;
    }

    /**
     * Returns The minimum (inclusive) monetary value of the range..
     *
     * @return int|float|null
     */
    public function getMin(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('min');

        return $value;
    }

    /**
     * Sets The minimum (inclusive) monetary value of the range..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setMin(int|float|null $value): self
    {
        $this->setAttribute('min', $value);

        return $this;
    }
}
