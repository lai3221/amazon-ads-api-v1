<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A generic dimension filter. Uses string-based dimension types to avoid schema changes when new targeting dimensions are added.
 *
 * @generated from Amazon Ads API v1 schema CreateGenericDimension.
 */
final class CreateGenericDimension extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateGenericDimension';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dimensionType' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'dimensionValues' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
        'negative' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The type of dimension (e.g., DEVICE TYPE, BROWSER, REGION, OPERATING SYSTEM)..
     *
     * @return string|null
     */
    public function getDimensionType(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dimensionType');

        return $value;
    }

    /**
     * Sets The type of dimension (e.g., DEVICE TYPE, BROWSER, REGION, OPERATING SYSTEM)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDimensionType(?string $value): self
    {
        $this->setAttribute('dimensionType', $value);

        return $this;
    }

    /**
     * Returns The values to match for this dimension (e.g., [phone, tablet] for DEVICE TYPE)..
     *
     * @return list<string>|null
     */
    public function getDimensionValues(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('dimensionValues');

        return $value;
    }

    /**
     * Sets The values to match for this dimension (e.g., [phone, tablet] for DEVICE TYPE)..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setDimensionValues(?array $value): self
    {
        $this->setAttribute('dimensionValues', $value);

        return $this;
    }

    /**
     * Returns If true, applies NOT operator to this dimension filter. Default is false..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets If true, applies NOT operator to this dimension filter. Default is false..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

        return $this;
    }
}
