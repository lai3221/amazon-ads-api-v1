<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetMultiStatusSuccess.
 */
final class TargetMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetMultiStatusSuccess';

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
