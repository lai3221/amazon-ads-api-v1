<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AccountCombinationInvitationUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AccountCombinationInvitationUpdate.
 */
final class AccountCombinationInvitationUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountCombinationInvitationUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accountCombinationInvitationId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'accountsToCombine' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateAccountToCombine::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 17,
        ],
        'advertiserAccountId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => AccountCombinationInvitationStatus::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The unique identifier for the account combination invitation..
     *
     * @return string|null
     */
    public function getAccountCombinationInvitationId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('accountCombinationInvitationId');

        return $value;
    }

    /**
     * Sets The unique identifier for the account combination invitation..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAccountCombinationInvitationId(?string $value): self
    {
        $this->setAttribute('accountCombinationInvitationId', $value);

        return $this;
    }

    /**
     * Returns The list of accounts to combine into one Advertiser Account..
     *
     * @return list<CreateAccountToCombine>|null
     */
    public function getAccountsToCombine(): ?array
    {
        /** @var list<CreateAccountToCombine>|null $value */
        $value = $this->getAttribute('accountsToCombine');

        return $value;
    }

    /**
     * Sets The list of accounts to combine into one Advertiser Account..
     *
     * @param list<CreateAccountToCombine>|null $value New property value.
     * @return $this
     */
    public function setAccountsToCombine(?array $value): self
    {
        $this->setAttribute('accountsToCombine', $value);

        return $this;
    }

    /**
     * Returns The identifier of the Advertiser Account in the account combination invitation, in ACI format. Example: amzn1.ads-account.g.a1bc2de3fg4hi5jk6lm7no8pq..
     *
     * @return string|null
     */
    public function getAdvertiserAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertiserAccountId');

        return $value;
    }

    /**
     * Sets The identifier of the Advertiser Account in the account combination invitation, in ACI format. Example: amzn1.ads-account.g.a1bc2de3fg4hi5jk6lm7no8pq..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccountId(?string $value): self
    {
        $this->setAttribute('advertiserAccountId', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return AccountCombinationInvitationStatus|null
     */
    public function getStatus(): ?AccountCombinationInvitationStatus
    {
        /** @var AccountCombinationInvitationStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param AccountCombinationInvitationStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(AccountCombinationInvitationStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
