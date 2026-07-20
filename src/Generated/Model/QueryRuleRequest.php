<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryRuleRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryRuleRequest.
 */
final class QueryRuleRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryRuleRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProductFilter' => [
            'type' => 'model',
            'class' => RuleAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 5,
            'maximum' => 1000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'ruleIdFilter' => [
            'type' => 'model',
            'class' => RuleRuleIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => RuleStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'tagsFilter' => [
            'type' => 'model',
            'class' => RuleTagsFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProductFilter value.
     *
     * @return RuleAdProductFilter|null
     */
    public function getAdProductFilter(): ?RuleAdProductFilter
    {
        /** @var RuleAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param RuleAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(RuleAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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

    /**
     * Returns the ruleIdFilter value.
     *
     * @return RuleRuleIdFilter|null
     */
    public function getRuleIdFilter(): ?RuleRuleIdFilter
    {
        /** @var RuleRuleIdFilter|null $value */
        $value = $this->getAttribute('ruleIdFilter');

        return $value;
    }

    /**
     * Sets the ruleIdFilter value.
     *
     * @param RuleRuleIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setRuleIdFilter(RuleRuleIdFilter|array|null $value): self
    {
        $this->setAttribute('ruleIdFilter', $value);

        return $this;
    }

    /**
     * Returns the stateFilter value.
     *
     * @return RuleStateFilter|null
     */
    public function getStateFilter(): ?RuleStateFilter
    {
        /** @var RuleStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param RuleStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(RuleStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }

    /**
     * Returns the tagsFilter value.
     *
     * @return RuleTagsFilter|null
     */
    public function getTagsFilter(): ?RuleTagsFilter
    {
        /** @var RuleTagsFilter|null $value */
        $value = $this->getAttribute('tagsFilter');

        return $value;
    }

    /**
     * Sets the tagsFilter value.
     *
     * @param RuleTagsFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTagsFilter(RuleTagsFilter|array|null $value): self
    {
        $this->setAttribute('tagsFilter', $value);

        return $this;
    }
}
