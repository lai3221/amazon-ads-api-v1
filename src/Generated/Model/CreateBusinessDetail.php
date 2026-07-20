<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The business details of advertising account.
 *
 * @generated from Amazon Ads API v1 schema CreateBusinessDetail.
 */
final class CreateBusinessDetail extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateBusinessDetail';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'address' => [
            'type' => 'model',
            'class' => CreateAddress::class,
            'required' => false,
            'nullable' => false,
        ],
        'addressToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'businessRegistrationNumber' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'website' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the address value.
     *
     * @return CreateAddress|null
     */
    public function getAddress(): ?CreateAddress
    {
        /** @var CreateAddress|null $value */
        $value = $this->getAttribute('address');

        return $value;
    }

    /**
     * Sets the address value.
     *
     * @param CreateAddress|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAddress(CreateAddress|array|null $value): self
    {
        $this->setAttribute('address', $value);

        return $this;
    }

    /**
     * Returns The token of the business address being linked..
     *
     * @return string|null
     */
    public function getAddressToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('addressToken');

        return $value;
    }

    /**
     * Sets The token of the business address being linked..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAddressToken(?string $value): self
    {
        $this->setAttribute('addressToken', $value);

        return $this;
    }

    /**
     * Returns The business registration number of the business..
     *
     * @return string|null
     */
    public function getBusinessRegistrationNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('businessRegistrationNumber');

        return $value;
    }

    /**
     * Sets The business registration number of the business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBusinessRegistrationNumber(?string $value): self
    {
        $this->setAttribute('businessRegistrationNumber', $value);

        return $this;
    }

    /**
     * Returns The website of the business..
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('website');

        return $value;
    }

    /**
     * Sets The website of the business..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setWebsite(?string $value): self
    {
        $this->setAttribute('website', $value);

        return $this;
    }
}
