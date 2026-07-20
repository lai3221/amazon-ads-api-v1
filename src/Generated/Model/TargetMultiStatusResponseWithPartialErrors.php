<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetMultiStatusResponseWithPartialErrors schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetMultiStatusResponseWithPartialErrors.
 */
final class TargetMultiStatusResponseWithPartialErrors extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetMultiStatusResponseWithPartialErrors';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'error' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ErrorsIndex::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'partialSuccess' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => TargetPartialIndex::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'success' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => TargetMultiStatusSuccess::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the error value.
     *
     * @return list<ErrorsIndex>|null
     */
    public function getError(): ?array
    {
        /** @var list<ErrorsIndex>|null $value */
        $value = $this->getAttribute('error');

        return $value;
    }

    /**
     * Sets the error value.
     *
     * @param list<ErrorsIndex>|null $value New property value.
     * @return $this
     */
    public function setError(?array $value): self
    {
        $this->setAttribute('error', $value);

        return $this;
    }

    /**
     * Returns the partialSuccess value.
     *
     * @return list<TargetPartialIndex>|null
     */
    public function getPartialSuccess(): ?array
    {
        /** @var list<TargetPartialIndex>|null $value */
        $value = $this->getAttribute('partialSuccess');

        return $value;
    }

    /**
     * Sets the partialSuccess value.
     *
     * @param list<TargetPartialIndex>|null $value New property value.
     * @return $this
     */
    public function setPartialSuccess(?array $value): self
    {
        $this->setAttribute('partialSuccess', $value);

        return $this;
    }

    /**
     * Returns the success value.
     *
     * @return list<TargetMultiStatusSuccess>|null
     */
    public function getSuccess(): ?array
    {
        /** @var list<TargetMultiStatusSuccess>|null $value */
        $value = $this->getAttribute('success');

        return $value;
    }

    /**
     * Sets the success value.
     *
     * @param list<TargetMultiStatusSuccess>|null $value New property value.
     * @return $this
     */
    public function setSuccess(?array $value): self
    {
        $this->setAttribute('success', $value);

        return $this;
    }
}
