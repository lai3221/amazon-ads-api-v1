<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SellingAccountSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SellingAccountSuccessResponse.
 */
final class SellingAccountSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccountSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'sellingAccounts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SellingAccount::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }

    /**
     * Returns the sellingAccounts value.
     *
     * @return list<SellingAccount>|null
     */
    public function getSellingAccounts(): ?array
    {
        /** @var list<SellingAccount>|null $value */
        $value = $this->getAttribute('sellingAccounts');

        return $value;
    }

    /**
     * Sets the sellingAccounts value.
     *
     * @param list<SellingAccount>|null $value New property value.
     * @return $this
     */
    public function setSellingAccounts(?array $value): self
    {
        $this->setAttribute('sellingAccounts', $value);

        return $this;
    }
}
