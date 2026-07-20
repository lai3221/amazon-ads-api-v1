<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SpendsTier schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SpendsTier.
 */
final class SpendsTier extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SpendsTier';

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
        'description' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'reward' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'threshold' => [
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
     * Returns The description of the spending tier..
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
     * Sets The description of the spending tier..
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
     * Returns The click credits amount to be rewarded when this tier's threshold is met..
     *
     * @return int|float|null
     */
    public function getReward(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('reward');

        return $value;
    }

    /**
     * Sets The click credits amount to be rewarded when this tier's threshold is met..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setReward(int|float|null $value): self
    {
        $this->setAttribute('reward', $value);

        return $this;
    }

    /**
     * Returns The minimum spend amount required for this tier..
     *
     * @return int|float|null
     */
    public function getThreshold(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('threshold');

        return $value;
    }

    /**
     * Sets The minimum spend amount required for this tier..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setThreshold(int|float|null $value): self
    {
        $this->setAttribute('threshold', $value);

        return $this;
    }
}
