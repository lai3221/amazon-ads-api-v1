<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleLinkMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleLinkMultiStatusSuccess.
 */
final class RuleLinkMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleLinkMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 0,
        ],
        'ruleLink' => [
            'type' => 'model',
            'class' => RuleLink::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the ruleLink value.
     *
     * @return RuleLink|null
     */
    public function getRuleLink(): ?RuleLink
    {
        /** @var RuleLink|null $value */
        $value = $this->getAttribute('ruleLink');

        return $value;
    }

    /**
     * Sets the ruleLink value.
     *
     * @param RuleLink|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setRuleLink(RuleLink|array|null $value): self
    {
        $this->setAttribute('ruleLink', $value);

        return $this;
    }
}
