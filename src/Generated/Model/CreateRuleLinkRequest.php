<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateRuleLinkRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateRuleLinkRequest.
 */
final class CreateRuleLinkRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateRuleLinkRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ruleLinks' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleLinkCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the ruleLinks value.
     *
     * @return list<RuleLinkCreate>|null
     */
    public function getRuleLinks(): ?array
    {
        /** @var list<RuleLinkCreate>|null $value */
        $value = $this->getAttribute('ruleLinks');

        return $value;
    }

    /**
     * Sets the ruleLinks value.
     *
     * @param list<RuleLinkCreate>|null $value New property value.
     * @return $this
     */
    public function setRuleLinks(?array $value): self
    {
        $this->setAttribute('ruleLinks', $value);

        return $this;
    }
}
