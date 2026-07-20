<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionMultiStatusResponseWithPartialErrors schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionMultiStatusResponseWithPartialErrors.
 */
final class AdExtensionMultiStatusResponseWithPartialErrors extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionMultiStatusResponseWithPartialErrors';

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
            'maxItems' => 50,
        ],
        'partialSuccess' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdExtensionPartialIndex::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'success' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdExtensionMultiStatusSuccess::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
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
     * @return list<AdExtensionPartialIndex>|null
     */
    public function getPartialSuccess(): ?array
    {
        /** @var list<AdExtensionPartialIndex>|null $value */
        $value = $this->getAttribute('partialSuccess');

        return $value;
    }

    /**
     * Sets the partialSuccess value.
     *
     * @param list<AdExtensionPartialIndex>|null $value New property value.
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
     * @return list<AdExtensionMultiStatusSuccess>|null
     */
    public function getSuccess(): ?array
    {
        /** @var list<AdExtensionMultiStatusSuccess>|null $value */
        $value = $this->getAttribute('success');

        return $value;
    }

    /**
     * Sets the success value.
     *
     * @param list<AdExtensionMultiStatusSuccess>|null $value New property value.
     * @return $this
     */
    public function setSuccess(?array $value): self
    {
        $this->setAttribute('success', $value);

        return $this;
    }
}
