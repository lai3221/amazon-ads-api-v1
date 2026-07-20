<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetPartialIndex schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetPartialIndex.
 */
final class TargetPartialIndex extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetPartialIndex';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'errors' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Error::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 999,
        ],
        'target' => [
            'type' => 'model',
            'class' => Target::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the errors value.
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        /** @var list<Error>|null $value */
        $value = $this->getAttribute('errors');

        return $value;
    }

    /**
     * Sets the errors value.
     *
     * @param list<Error>|null $value New property value.
     * @return $this
     */
    public function setErrors(?array $value): self
    {
        $this->setAttribute('errors', $value);

        return $this;
    }

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
     * Returns the target value.
     *
     * @return Target|null
     */
    public function getTarget(): ?Target
    {
        /** @var Target|null $value */
        $value = $this->getAttribute('target');

        return $value;
    }

    /**
     * Sets the target value.
     *
     * @param Target|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTarget(Target|array|null $value): self
    {
        $this->setAttribute('target', $value);

        return $this;
    }
}
