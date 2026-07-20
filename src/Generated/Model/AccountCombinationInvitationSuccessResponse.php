<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AccountCombinationInvitationSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AccountCombinationInvitationSuccessResponse.
 */
final class AccountCombinationInvitationSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountCombinationInvitationSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accountCombinationInvitations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AccountCombinationInvitation::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the accountCombinationInvitations value.
     *
     * @return list<AccountCombinationInvitation>|null
     */
    public function getAccountCombinationInvitations(): ?array
    {
        /** @var list<AccountCombinationInvitation>|null $value */
        $value = $this->getAttribute('accountCombinationInvitations');

        return $value;
    }

    /**
     * Sets the accountCombinationInvitations value.
     *
     * @param list<AccountCombinationInvitation>|null $value New property value.
     * @return $this
     */
    public function setAccountCombinationInvitations(?array $value): self
    {
        $this->setAttribute('accountCombinationInvitations', $value);

        return $this;
    }

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
}
