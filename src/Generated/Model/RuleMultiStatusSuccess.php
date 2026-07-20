<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RuleMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RuleMultiStatusSuccess.
 */
final class RuleMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 0,
        ],
        'rule' => [
            'type' => 'model',
            'class' => Rule::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }

    /**
     * Returns the rule value.
     *
     * @return Rule|null
     */
    public function getRule(): ?Rule
    {
        /** @var Rule|null $value */
        $value = $this->getAttribute('rule');

        return $value;
    }

    /**
     * Sets the rule value.
     *
     * @param Rule|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setRule(Rule|array|null $value): self
    {
        $this->setAttribute('rule', $value);

        return $this;
    }
}
