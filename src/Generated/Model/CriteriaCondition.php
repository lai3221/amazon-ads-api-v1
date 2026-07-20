<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Defines list of criteria (performance etc .) based conditions.
 *
 * @generated from Amazon Ads API v1 schema CriteriaCondition.
 */
final class CriteriaCondition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CriteriaCondition';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'criteria' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleCriteria::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
        'criteriaJoinOperator' => [
            'type' => 'enum',
            'class' => JoinOperator::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the criteria value.
     *
     * @return list<RuleCriteria>|null
     */
    public function getCriteria(): ?array
    {
        /** @var list<RuleCriteria>|null $value */
        $value = $this->getAttribute('criteria');

        return $value;
    }

    /**
     * Sets the criteria value.
     *
     * @param list<RuleCriteria>|null $value New property value.
     * @return $this
     */
    public function setCriteria(?array $value): self
    {
        $this->setAttribute('criteria', $value);

        return $this;
    }

    /**
     * Returns the criteriaJoinOperator value.
     *
     * @return JoinOperator|null
     */
    public function getCriteriaJoinOperator(): ?JoinOperator
    {
        /** @var JoinOperator|null $value */
        $value = $this->getAttribute('criteriaJoinOperator');

        return $value;
    }

    /**
     * Sets the criteriaJoinOperator value.
     *
     * @param JoinOperator|string|null $value New property value.
     * @return $this
     */
    public function setCriteriaJoinOperator(JoinOperator|string|null $value): self
    {
        $this->setAttribute('criteriaJoinOperator', $value);

        return $this;
    }
}
