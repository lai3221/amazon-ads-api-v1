<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The set of conditions defined for a dimension rule.
 *
 * @generated from Amazon Ads API v1 schema DimensionRuleCondition.
 */
final class DimensionRuleCondition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DimensionRuleCondition';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'criteriaCondition' => [
            'type' => 'model',
            'class' => CriteriaCondition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the criteriaCondition value.
     *
     * @return CriteriaCondition|null
     */
    public function getCriteriaCondition(): ?CriteriaCondition
    {
        /** @var CriteriaCondition|null $value */
        $value = $this->getAttribute('criteriaCondition');

        return $value;
    }

    /**
     * Sets the criteriaCondition value.
     *
     * @param CriteriaCondition|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCriteriaCondition(CriteriaCondition|array|null $value): self
    {
        $this->setAttribute('criteriaCondition', $value);

        return $this;
    }
}
