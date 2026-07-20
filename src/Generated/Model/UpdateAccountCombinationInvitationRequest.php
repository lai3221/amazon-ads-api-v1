<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAccountCombinationInvitationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAccountCombinationInvitationRequest.
 */
final class UpdateAccountCombinationInvitationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAccountCombinationInvitationRequest';

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
                'class' => AccountCombinationInvitationUpdate::class,
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
     * @return list<AccountCombinationInvitationUpdate>|null
     */
    public function getAccountCombinationInvitations(): ?array
    {
        /** @var list<AccountCombinationInvitationUpdate>|null $value */
        $value = $this->getAttribute('accountCombinationInvitations');

        return $value;
    }

    /**
     * Sets the accountCombinationInvitations value.
     *
     * @param list<AccountCombinationInvitationUpdate>|null $value New property value.
     * @return $this
     */
    public function setAccountCombinationInvitations(?array $value): self
    {
        $this->setAttribute('accountCombinationInvitations', $value);

        return $this;
    }
}
