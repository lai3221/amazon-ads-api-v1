<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleLinkCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleLinkCreate.
 */
final class RuleLinkCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleLinkCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ruleLinkId' => [
            'type' => 'model',
            'class' => CreateRuleLinkIdentity::class,
            'required' => true,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => CreateState::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the ruleLinkId value.
     *
     * @return CreateRuleLinkIdentity|null
     */
    public function getRuleLinkId(): ?CreateRuleLinkIdentity
    {
        /** @var CreateRuleLinkIdentity|null $value */
        $value = $this->getAttribute('ruleLinkId');

        return $value;
    }

    /**
     * Sets the ruleLinkId value.
     *
     * @param CreateRuleLinkIdentity|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setRuleLinkId(CreateRuleLinkIdentity|array|null $value): self
    {
        $this->setAttribute('ruleLinkId', $value);

        return $this;
    }

    /**
     * Returns the state value.
     *
     * @return CreateState|null
     */
    public function getState(): ?CreateState
    {
        /** @var CreateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param CreateState|string|null $value New property value.
     * @return $this
     */
    public function setState(CreateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }
}
