<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Rule schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Rule.
 */
final class Rule extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Rule';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'duration' => [
            'type' => 'model',
            'class' => RuleDuration::class,
            'required' => false,
            'nullable' => false,
        ],
        'expression' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleExpression::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
        'expressionType' => [
            'type' => 'enum',
            'class' => RuleExpressionType::class,
            'required' => true,
            'nullable' => false,
        ],
        'lastUpdatedDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
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
            'class' => State::class,
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'model',
            'class' => Status::class,
            'required' => true,
            'nullable' => false,
        ],
        'tags' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Tag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return AdProduct|null
     */
    public function getAdProduct(): ?AdProduct
    {
        /** @var AdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param AdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(AdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns The date time that the rule was created..
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets The date time that the rule was created..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns the duration value.
     *
     * @return RuleDuration|null
     */
    public function getDuration(): ?RuleDuration
    {
        /** @var RuleDuration|null $value */
        $value = $this->getAttribute('duration');

        return $value;
    }

    /**
     * Sets the duration value.
     *
     * @param RuleDuration|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDuration(RuleDuration|array|null $value): self
    {
        $this->setAttribute('duration', $value);

        return $this;
    }

    /**
     * Returns A set of conditions and actions that define the rule behavior..
     *
     * @return list<RuleExpression>|null
     */
    public function getExpression(): ?array
    {
        /** @var list<RuleExpression>|null $value */
        $value = $this->getAttribute('expression');

        return $value;
    }

    /**
     * Sets A set of conditions and actions that define the rule behavior..
     *
     * @param list<RuleExpression>|null $value New property value.
     * @return $this
     */
    public function setExpression(?array $value): self
    {
        $this->setAttribute('expression', $value);

        return $this;
    }

    /**
     * Returns the expressionType value.
     *
     * @return RuleExpressionType|null
     */
    public function getExpressionType(): ?RuleExpressionType
    {
        /** @var RuleExpressionType|null $value */
        $value = $this->getAttribute('expressionType');

        return $value;
    }

    /**
     * Sets the expressionType value.
     *
     * @param RuleExpressionType|string|null $value New property value.
     * @return $this
     */
    public function setExpressionType(RuleExpressionType|string|null $value): self
    {
        $this->setAttribute('expressionType', $value);

        return $this;
    }

    /**
     * Returns The date time that the rule was last updated..
     *
     * @return \DateTimeImmutable|null
     */
    public function getLastUpdatedDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('lastUpdatedDateTime');

        return $value;
    }

    /**
     * Sets The date time that the rule was last updated..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setLastUpdatedDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('lastUpdatedDateTime', $value);

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
     * @return State|null
     */
    public function getState(): ?State
    {
        /** @var State|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param State|string|null $value New property value.
     * @return $this
     */
    public function setState(State|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return Status|null
     */
    public function getStatus(): ?Status
    {
        /** @var Status|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param Status|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatus(Status|array|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the rule..
     *
     * @return list<Tag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<Tag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the rule..
     *
     * @param list<Tag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }
}
