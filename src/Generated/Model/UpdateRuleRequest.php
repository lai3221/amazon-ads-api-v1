<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateRuleRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateRuleRequest.
 */
final class UpdateRuleRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateRuleRequest';

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
                'class' => RuleUpdate::class,
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
     * @return list<RuleUpdate>|null
     */
    public function getRules(): ?array
    {
        /** @var list<RuleUpdate>|null $value */
        $value = $this->getAttribute('rules');

        return $value;
    }

    /**
     * Sets the rules value.
     *
     * @param list<RuleUpdate>|null $value New property value.
     * @return $this
     */
    public function setRules(?array $value): self
    {
        $this->setAttribute('rules', $value);

        return $this;
    }
}
