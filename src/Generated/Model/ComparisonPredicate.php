<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ComparisonPredicate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ComparisonPredicate.
 */
final class ComparisonPredicate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ComparisonPredicate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'comparisonOperator' => [
            'type' => 'enum',
            'class' => ComparisonOperator::class,
            'required' => true,
            'nullable' => false,
        ],
        'field' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'not' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'values' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2000,
        ],
    ];

    /**
     * Returns the comparisonOperator value.
     *
     * @return ComparisonOperator|null
     */
    public function getComparisonOperator(): ?ComparisonOperator
    {
        /** @var ComparisonOperator|null $value */
        $value = $this->getAttribute('comparisonOperator');

        return $value;
    }

    /**
     * Sets the comparisonOperator value.
     *
     * @param ComparisonOperator|string|null $value New property value.
     * @return $this
     */
    public function setComparisonOperator(ComparisonOperator|string|null $value): self
    {
        $this->setAttribute('comparisonOperator', $value);

        return $this;
    }

    /**
     * Returns the field value.
     *
     * @return string|null
     */
    public function getField(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('field');

        return $value;
    }

    /**
     * Sets the field value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setField(?string $value): self
    {
        $this->setAttribute('field', $value);

        return $this;
    }

    /**
     * Returns the not value.
     *
     * @return bool|null
     */
    public function getNot(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('not');

        return $value;
    }

    /**
     * Sets the not value.
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNot(?bool $value): self
    {
        $this->setAttribute('not', $value);

        return $this;
    }

    /**
     * Returns the values value.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('values');

        return $value;
    }

    /**
     * Sets the values value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setValues(?array $value): self
    {
        $this->setAttribute('values', $value);

        return $this;
    }
}
