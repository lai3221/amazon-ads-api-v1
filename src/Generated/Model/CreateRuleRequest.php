<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateRuleRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateRuleRequest.
 */
final class CreateRuleRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateRuleRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'rules' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the rules value.
     *
     * @return list<RuleCreate>|null
     */
    public function getRules(): ?array
    {
        /** @var list<RuleCreate>|null $value */
        $value = $this->getAttribute('rules');

        return $value;
    }

    /**
     * Sets the rules value.
     *
     * @param list<RuleCreate>|null $value New property value.
     * @return $this
     */
    public function setRules(?array $value): self
    {
        $this->setAttribute('rules', $value);

        return $this;
    }
}
