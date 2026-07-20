<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionAdExtensionTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionAdExtensionTypeFilter.
 */
final class AdExtensionAdExtensionTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionAdExtensionTypeFilter';

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
                'class' => AdExtensionType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns AdExtensionType Enum: AdExtensionType Description --- --- PROMPTS Enables Prompt based Ad Extension. VIDEO Enables Video based Ad Extension..
     *
     * @return list<AdExtensionType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<AdExtensionType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets AdExtensionType Enum: AdExtensionType Description --- --- PROMPTS Enables Prompt based Ad Extension. VIDEO Enables Video based Ad Extension..
     *
     * @param list<AdExtensionType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
