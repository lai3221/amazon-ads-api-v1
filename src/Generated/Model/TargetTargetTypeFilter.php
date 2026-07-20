<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetTargetTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetTargetTypeFilter.
 */
final class TargetTargetTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetTargetTypeFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => TargetType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 17,
        ],
    ];

    /**
     * Returns TargetType Enum: TargetType Description --- --- KEYWORD Target based on customer search terms. PRODUCT Target based on a specific product. PRODUCT CATEGORY Target based on a product category. PRODUCT AUDIENCE Target customers who interacted with a specific..
     *
     * @return list<TargetType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<TargetType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets TargetType Enum: TargetType Description --- --- KEYWORD Target based on customer search terms. PRODUCT Target based on a specific product. PRODUCT CATEGORY Target based on a product category. PRODUCT AUDIENCE Target customers who interacted with a specific..
     *
     * @param list<TargetType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
