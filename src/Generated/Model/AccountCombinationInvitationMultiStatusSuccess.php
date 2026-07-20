<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AccountCombinationInvitationMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AccountCombinationInvitationMultiStatusSuccess.
 */
final class AccountCombinationInvitationMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountCombinationInvitationMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accountCombinationInvitation' => [
            'type' => 'model',
            'class' => AccountCombinationInvitation::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 49,
        ],
    ];

    /**
     * Returns the accountCombinationInvitation value.
     *
     * @return AccountCombinationInvitation|null
     */
    public function getAccountCombinationInvitation(): ?AccountCombinationInvitation
    {
        /** @var AccountCombinationInvitation|null $value */
        $value = $this->getAttribute('accountCombinationInvitation');

        return $value;
    }

    /**
     * Sets the accountCombinationInvitation value.
     *
     * @param AccountCombinationInvitation|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAccountCombinationInvitation(AccountCombinationInvitation|array|null $value): self
    {
        $this->setAttribute('accountCombinationInvitation', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
