<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The set of conditions defined for a dimension rule.
 *
 * @generated from Amazon Ads API v1 schema CreateDimensionRuleCondition.
 */
final class CreateDimensionRuleCondition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDimensionRuleCondition';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'criteriaCondition' => [
            'type' => 'model',
            'class' => CreateCriteriaCondition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the criteriaCondition value.
     *
     * @return CreateCriteriaCondition|null
     */
    public function getCriteriaCondition(): ?CreateCriteriaCondition
    {
        /** @var CreateCriteriaCondition|null $value */
        $value = $this->getAttribute('criteriaCondition');

        return $value;
    }

    /**
     * Sets the criteriaCondition value.
     *
     * @param CreateCriteriaCondition|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCriteriaCondition(CreateCriteriaCondition|array|null $value): self
    {
        $this->setAttribute('criteriaCondition', $value);

        return $this;
    }
}
