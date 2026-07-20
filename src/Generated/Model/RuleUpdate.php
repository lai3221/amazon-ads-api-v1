<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleUpdate.
 */
final class RuleUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'duration' => [
            'type' => 'model',
            'class' => UpdateRuleDuration::class,
            'required' => false,
            'nullable' => false,
        ],
        'expression' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateRuleExpression::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
        'name' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'onRuleExpressionConflict' => [
            'type' => 'enum',
            'class' => RuleExpressionConflictStrategy::class,
            'required' => false,
            'nullable' => false,
        ],
        'ruleId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => UpdateState::class,
            'required' => false,
            'nullable' => false,
        ],
        'tags' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateTag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
    ];

    /**
     * Returns the duration value.
     *
     * @return UpdateRuleDuration|null
     */
    public function getDuration(): ?UpdateRuleDuration
    {
        /** @var UpdateRuleDuration|null $value */
        $value = $this->getAttribute('duration');

        return $value;
    }

    /**
     * Sets the duration value.
     *
     * @param UpdateRuleDuration|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDuration(UpdateRuleDuration|array|null $value): self
    {
        $this->setAttribute('duration', $value);

        return $this;
    }

    /**
     * Returns A set of conditions and actions that define the rule behavior..
     *
     * @return list<CreateRuleExpression>|null
     */
    public function getExpression(): ?array
    {
        /** @var list<CreateRuleExpression>|null $value */
        $value = $this->getAttribute('expression');

        return $value;
    }

    /**
     * Sets A set of conditions and actions that define the rule behavior..
     *
     * @param list<CreateRuleExpression>|null $value New property value.
     * @return $this
     */
    public function setExpression(?array $value): self
    {
        $this->setAttribute('expression', $value);

        return $this;
    }

    /**
     * Returns The name of the rule..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets The name of the rule..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns the onRuleExpressionConflict value.
     *
     * @return RuleExpressionConflictStrategy|null
     */
    public function getOnRuleExpressionConflict(): ?RuleExpressionConflictStrategy
    {
        /** @var RuleExpressionConflictStrategy|null $value */
        $value = $this->getAttribute('onRuleExpressionConflict');

        return $value;
    }

    /**
     * Sets the onRuleExpressionConflict value.
     *
     * @param RuleExpressionConflictStrategy|string|null $value New property value.
     * @return $this
     */
    public function setOnRuleExpressionConflict(RuleExpressionConflictStrategy|string|null $value): self
    {
        $this->setAttribute('onRuleExpressionConflict', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the rule..
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
     * Sets The unique identifier of the rule..
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
     * Returns the state value.
     *
     * @return UpdateState|null
     */
    public function getState(): ?UpdateState
    {
        /** @var UpdateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param UpdateState|string|null $value New property value.
     * @return $this
     */
    public function setState(UpdateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the rule..
     *
     * @return list<CreateTag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<CreateTag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the rule..
     *
     * @param list<CreateTag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }
}
