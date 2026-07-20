<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Values for a location index where the indexValue is the pre-calculated index.
 *
 * @generated from Amazon Ads API v1 schema DirectIndexValue.
 */
final class DirectIndexValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DirectIndexValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'indexValue' => [
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
     * Returns The pre-calculated index value..
     *
     * @return int|float|null
     */
    public function getIndexValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('indexValue');

        return $value;
    }

    /**
     * Sets The pre-calculated index value..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setIndexValue(int|float|null $value): self
    {
        $this->setAttribute('indexValue', $value);

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
