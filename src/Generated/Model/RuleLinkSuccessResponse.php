<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleLinkSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleLinkSuccessResponse.
 */
final class RuleLinkSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleLinkSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'ruleLinks' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleLink::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
    ];

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
     * Returns the ruleLinks value.
     *
     * @return list<RuleLink>|null
     */
    public function getRuleLinks(): ?array
    {
        /** @var list<RuleLink>|null $value */
        $value = $this->getAttribute('ruleLinks');

        return $value;
    }

    /**
     * Sets the ruleLinks value.
     *
     * @param list<RuleLink>|null $value New property value.
     * @return $this
     */
    public function setRuleLinks(?array $value): self
    {
        $this->setAttribute('ruleLinks', $value);

        return $this;
    }
}
