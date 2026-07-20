<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAccountCombinationInvitationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAccountCombinationInvitationRequest.
 */
final class CreateAccountCombinationInvitationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAccountCombinationInvitationRequest';

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
                'class' => AccountCombinationInvitationCreate::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 50,
        ],
    ];

    /**
     * Returns the accountCombinationInvitations value.
     *
     * @return list<AccountCombinationInvitationCreate>|null
     */
    public function getAccountCombinationInvitations(): ?array
    {
        /** @var list<AccountCombinationInvitationCreate>|null $value */
        $value = $this->getAttribute('accountCombinationInvitations');

        return $value;
    }

    /**
     * Sets the accountCombinationInvitations value.
     *
     * @param list<AccountCombinationInvitationCreate>|null $value New property value.
     * @return $this
     */
    public function setAccountCombinationInvitations(?array $value): self
    {
        $this->setAttribute('accountCombinationInvitations', $value);

        return $this;
    }
}
