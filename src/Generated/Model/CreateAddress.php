<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The business address of advertising account.
 *
 * @generated from Amazon Ads API v1 schema CreateAddress.
 */
final class CreateAddress extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAddress';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'addressLine1' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'addressLine2' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'businessName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'city' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'countryCode' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'phoneNumber' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'zipCode' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The address details - 1 of business..
     *
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('addressLine1');

        return $value;
    }

    /**
     * Sets The address details - 1 of business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAddressLine1(?string $value): self
    {
        $this->setAttribute('addressLine1', $value);

        return $this;
    }

    /**
     * Returns The address details - 2 of business..
     *
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('addressLine2');

        return $value;
    }

    /**
     * Sets The address details - 2 of business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAddressLine2(?string $value): self
    {
        $this->setAttribute('addressLine2', $value);

        return $this;
    }

    /**
     * Returns The name of business..
     *
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('businessName');

        return $value;
    }

    /**
     * Sets The name of business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBusinessName(?string $value): self
    {
        $this->setAttribute('businessName', $value);

        return $this;
    }

    /**
     * Returns The city where business is located..
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('city');

        return $value;
    }

    /**
     * Sets The city where business is located..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCity(?string $value): self
    {
        $this->setAttribute('city', $value);

        return $this;
    }

    /**
     * Returns The country where business is located..
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('countryCode');

        return $value;
    }

    /**
     * Sets The country where business is located..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCountryCode(?string $value): self
    {
        $this->setAttribute('countryCode', $value);

        return $this;
    }

    /**
     * Returns The phone number of business..
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('phoneNumber');

        return $value;
    }

    /**
     * Sets The phone number of business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPhoneNumber(?string $value): self
    {
        $this->setAttribute('phoneNumber', $value);

        return $this;
    }

    /**
     * Returns The city where business is located..
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets The city where business is located..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setState(?string $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns The zipCode where business is located..
     *
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('zipCode');

        return $value;
    }

    /**
     * Sets The zipCode where business is located..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setZipCode(?string $value): self
    {
        $this->setAttribute('zipCode', $value);

        return $this;
    }
}
