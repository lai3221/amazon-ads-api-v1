<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Defines dimension-based targeting criteria using generic dimension filters.
 *
 * @generated from Amazon Ads API v1 schema DimensionCriteria.
 */
final class DimensionCriteria extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DimensionCriteria';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dimensionJoinOperator' => [
            'type' => 'enum',
            'class' => JoinOperator::class,
            'required' => true,
            'nullable' => false,
        ],
        'dimensions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => GenericDimension::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns the dimensionJoinOperator value.
     *
     * @return JoinOperator|null
     */
    public function getDimensionJoinOperator(): ?JoinOperator
    {
        /** @var JoinOperator|null $value */
        $value = $this->getAttribute('dimensionJoinOperator');

        return $value;
    }

    /**
     * Sets the dimensionJoinOperator value.
     *
     * @param JoinOperator|string|null $value New property value.
     * @return $this
     */
    public function setDimensionJoinOperator(JoinOperator|string|null $value): self
    {
        $this->setAttribute('dimensionJoinOperator', $value);

        return $this;
    }

    /**
     * Returns List of dimension filters to match..
     *
     * @return list<GenericDimension>|null
     */
    public function getDimensions(): ?array
    {
        /** @var list<GenericDimension>|null $value */
        $value = $this->getAttribute('dimensions');

        return $value;
    }

    /**
     * Sets List of dimension filters to match..
     *
     * @param list<GenericDimension>|null $value New property value.
     * @return $this
     */
    public function setDimensions(?array $value): self
    {
        $this->setAttribute('dimensions', $value);

        return $this;
    }
}
