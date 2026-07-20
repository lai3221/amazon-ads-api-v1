<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RetrieveRuleRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RetrieveRuleRequest.
 */
final class RetrieveRuleRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RetrieveRuleRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ruleIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the ruleIds value.
     *
     * @return list<string>|null
     */
    public function getRuleIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('ruleIds');

        return $value;
    }

    /**
     * Sets the ruleIds value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setRuleIds(?array $value): self
    {
        $this->setAttribute('ruleIds', $value);

        return $this;
    }
}
