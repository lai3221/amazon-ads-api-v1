<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the account-to-be-combined and its attributes.
 *
 * @generated from Amazon Ads API v1 schema AccountToCombine.
 */
final class AccountToCombine extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountToCombine';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accountFunction' => [
            'type' => 'enum',
            'class' => AccountFunction::class,
            'required' => false,
            'nullable' => false,
        ],
        'accountId' => [
            'type' => 'model',
            'class' => AccountId::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the accountFunction value.
     *
     * @return AccountFunction|null
     */
    public function getAccountFunction(): ?AccountFunction
    {
        /** @var AccountFunction|null $value */
        $value = $this->getAttribute('accountFunction');

        return $value;
    }

    /**
     * Sets the accountFunction value.
     *
     * @param AccountFunction|string|null $value New property value.
     * @return $this
     */
    public function setAccountFunction(AccountFunction|string|null $value): self
    {
        $this->setAttribute('accountFunction', $value);

        return $this;
    }

    /**
     * Returns the accountId value.
     *
     * @return AccountId|null
     */
    public function getAccountId(): ?AccountId
    {
        /** @var AccountId|null $value */
        $value = $this->getAttribute('accountId');

        return $value;
    }

    /**
     * Sets the accountId value.
     *
     * @param AccountId|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAccountId(AccountId|array|null $value): self
    {
        $this->setAttribute('accountId', $value);

        return $this;
    }
}
