<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleSuccessResponse.
 */
final class RuleSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleSuccessResponse';

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
        'rules' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Rule::class,
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
     * Returns the rules value.
     *
     * @return list<Rule>|null
     */
    public function getRules(): ?array
    {
        /** @var list<Rule>|null $value */
        $value = $this->getAttribute('rules');

        return $value;
    }

    /**
     * Sets the rules value.
     *
     * @param list<Rule>|null $value New property value.
     * @return $this
     */
    public function setRules(?array $value): self
    {
        $this->setAttribute('rules', $value);

        return $this;
    }
}
