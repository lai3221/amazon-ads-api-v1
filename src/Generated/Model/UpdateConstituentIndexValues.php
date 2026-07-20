<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateConstituentIndexValues schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateConstituentIndexValues.
 */
final class UpdateConstituentIndexValues extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateConstituentIndexValues';

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
                'class' => CreateConstituentIndexValue::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000000,
        ],
    ];

    /**
     * Returns List of brand and category sales values..
     *
     * @return list<CreateConstituentIndexValue>|null
     */
    public function getValues(): ?array
    {
        /** @var list<CreateConstituentIndexValue>|null $value */
        $value = $this->getAttribute('values');

        return $value;
    }

    /**
     * Sets List of brand and category sales values..
     *
     * @param list<CreateConstituentIndexValue>|null $value New property value.
     * @return $this
     */
    public function setValues(?array $value): self
    {
        $this->setAttribute('values', $value);

        return $this;
    }
}
