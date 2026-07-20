<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SellingAccount schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SellingAccount.
 */
final class SellingAccount extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccount';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'business' => [
            'type' => 'model',
            'class' => SellingAccountBusiness::class,
            'required' => false,
            'nullable' => false,
        ],
        'countryCodes' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => CountryCode::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
        'displayName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'portals' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => Portal::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 6,
        ],
        'sellingAccountLinkToken' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'sellingProgram' => [
            'type' => 'enum',
            'class' => SellingProgram::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the business value.
     *
     * @return SellingAccountBusiness|null
     */
    public function getBusiness(): ?SellingAccountBusiness
    {
        /** @var SellingAccountBusiness|null $value */
        $value = $this->getAttribute('business');

        return $value;
    }

    /**
     * Sets the business value.
     *
     * @param SellingAccountBusiness|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setBusiness(SellingAccountBusiness|array|null $value): self
    {
        $this->setAttribute('business', $value);

        return $this;
    }

    /**
     * Returns The countries of the selling account user can advertise in..
     *
     * @return list<CountryCode>|null
     */
    public function getCountryCodes(): ?array
    {
        /** @var list<CountryCode>|null $value */
        $value = $this->getAttribute('countryCodes');

        return $value;
    }

    /**
     * Sets The countries of the selling account user can advertise in..
     *
     * @param list<CountryCode>|null $value New property value.
     * @return $this
     */
    public function setCountryCodes(?array $value): self
    {
        $this->setAttribute('countryCodes', $value);

        return $this;
    }

    /**
     * Returns Display name for the selling account..
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('displayName');

        return $value;
    }

    /**
     * Sets Display name for the selling account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDisplayName(?string $value): self
    {
        $this->setAttribute('displayName', $value);

        return $this;
    }

    /**
     * Returns The portal(s) used to access the selling account..
     *
     * @return list<Portal>|null
     */
    public function getPortals(): ?array
    {
        /** @var list<Portal>|null $value */
        $value = $this->getAttribute('portals');

        return $value;
    }

    /**
     * Sets The portal(s) used to access the selling account..
     *
     * @param list<Portal>|null $value New property value.
     * @return $this
     */
    public function setPortals(?array $value): self
    {
        $this->setAttribute('portals', $value);

        return $this;
    }

    /**
     * Returns The token to locate a selling account..
     *
     * @return string|null
     */
    public function getSellingAccountLinkToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('sellingAccountLinkToken');

        return $value;
    }

    /**
     * Sets The token to locate a selling account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSellingAccountLinkToken(?string $value): self
    {
        $this->setAttribute('sellingAccountLinkToken', $value);

        return $this;
    }

    /**
     * Returns the sellingProgram value.
     *
     * @return SellingProgram|null
     */
    public function getSellingProgram(): ?SellingProgram
    {
        /** @var SellingProgram|null $value */
        $value = $this->getAttribute('sellingProgram');

        return $value;
    }

    /**
     * Sets the sellingProgram value.
     *
     * @param SellingProgram|string|null $value New property value.
     * @return $this
     */
    public function setSellingProgram(SellingProgram|string|null $value): self
    {
        $this->setAttribute('sellingProgram', $value);

        return $this;
    }
}
