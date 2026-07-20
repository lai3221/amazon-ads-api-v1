<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleLinkIdentity schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleLinkIdentity.
 */
final class RuleLinkIdentity extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleLinkIdentity';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'entityId' => [
            'type' => 'model',
            'class' => RuleLinkedEntity::class,
            'required' => true,
            'nullable' => false,
        ],
        'ruleId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'ruleLinkEntityType' => [
            'type' => 'enum',
            'class' => RuleLinkedEntityType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the entityId value.
     *
     * @return RuleLinkedEntity|null
     */
    public function getEntityId(): ?RuleLinkedEntity
    {
        /** @var RuleLinkedEntity|null $value */
        $value = $this->getAttribute('entityId');

        return $value;
    }

    /**
     * Sets the entityId value.
     *
     * @param RuleLinkedEntity|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEntityId(RuleLinkedEntity|array|null $value): self
    {
        $this->setAttribute('entityId', $value);

        return $this;
    }

    /**
     * Returns The associated rule..
     *
     * @return string|null
     */
    public function getRuleId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('ruleId');

        return $value;
    }

    /**
     * Sets The associated rule..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRuleId(?string $value): self
    {
        $this->setAttribute('ruleId', $value);

        return $this;
    }

    /**
     * Returns the ruleLinkEntityType value.
     *
     * @return RuleLinkedEntityType|null
     */
    public function getRuleLinkEntityType(): ?RuleLinkedEntityType
    {
        /** @var RuleLinkedEntityType|null $value */
        $value = $this->getAttribute('ruleLinkEntityType');

        return $value;
    }

    /**
     * Sets the ruleLinkEntityType value.
     *
     * @param RuleLinkedEntityType|string|null $value New property value.
     * @return $this
     */
    public function setRuleLinkEntityType(RuleLinkedEntityType|string|null $value): self
    {
        $this->setAttribute('ruleLinkEntityType', $value);

        return $this;
    }
}
