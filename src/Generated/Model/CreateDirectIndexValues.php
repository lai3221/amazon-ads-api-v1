<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateDirectIndexValues schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateDirectIndexValues.
 */
final class CreateDirectIndexValues extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDirectIndexValues';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'values' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateDirectIndexValue::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000000,
        ],
    ];

    /**
     * Returns List of direct index values..
     *
     * @return list<CreateDirectIndexValue>|null
     */
    public function getValues(): ?array
    {
        /** @var list<CreateDirectIndexValue>|null $value */
        $value = $this->getAttribute('values');

        return $value;
    }

    /**
     * Sets List of direct index values..
     *
     * @param list<CreateDirectIndexValue>|null $value New property value.
     * @return $this
     */
    public function setValues(?array $value): self
    {
        $this->setAttribute('values', $value);

        return $this;
    }
}
