<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The business details of selling account.
 *
 * @generated from Amazon Ads API v1 schema SellingAccountBusiness.
 */
final class SellingAccountBusiness extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccountBusiness';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'addresses' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SellingAccountAddress::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
        'website' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A list of business address the selling account has..
     *
     * @return list<SellingAccountAddress>|null
     */
    public function getAddresses(): ?array
    {
        /** @var list<SellingAccountAddress>|null $value */
        $value = $this->getAttribute('addresses');

        return $value;
    }

    /**
     * Sets A list of business address the selling account has..
     *
     * @param list<SellingAccountAddress>|null $value New property value.
     * @return $this
     */
    public function setAddresses(?array $value): self
    {
        $this->setAttribute('addresses', $value);

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
