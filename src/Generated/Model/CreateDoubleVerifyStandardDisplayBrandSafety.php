<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateDoubleVerifyStandardDisplayBrandSafety schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateDoubleVerifyStandardDisplayBrandSafety.
 */
final class CreateDoubleVerifyStandardDisplayBrandSafety extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDoubleVerifyStandardDisplayBrandSafety';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentCategories' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => DVBrandSafetyContentCategoryType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'contentCategoriesWithRisk' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateDVBrandSafetyContentCategoriesWithRiskMap::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'unknownContent' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A list of content categories to exclude from targeting..
     *
     * @return list<DVBrandSafetyContentCategoryType>|null
     */
    public function getContentCategories(): ?array
    {
        /** @var list<DVBrandSafetyContentCategoryType>|null $value */
        $value = $this->getAttribute('contentCategories');

        return $value;
    }

    /**
     * Sets A list of content categories to exclude from targeting..
     *
     * @param list<DVBrandSafetyContentCategoryType>|null $value New property value.
     * @return $this
     */
    public function setContentCategories(?array $value): self
    {
        $this->setAttribute('contentCategories', $value);

        return $this;
    }

    /**
     * Returns the contentCategoriesWithRisk value.
     *
     * @return list<CreateDVBrandSafetyContentCategoriesWithRiskMap>|null
     */
    public function getContentCategoriesWithRisk(): ?array
    {
        /** @var list<CreateDVBrandSafetyContentCategoriesWithRiskMap>|null $value */
        $value = $this->getAttribute('contentCategoriesWithRisk');

        return $value;
    }

    /**
     * Sets the contentCategoriesWithRisk value.
     *
     * @param list<CreateDVBrandSafetyContentCategoriesWithRiskMap>|null $value New property value.
     * @return $this
     */
    public function setContentCategoriesWithRisk(?array $value): self
    {
        $this->setAttribute('contentCategoriesWithRisk', $value);

        return $this;
    }

    /**
     * Returns Set to true to exclude unknown content..
     *
     * @return bool|null
     */
    public function getUnknownContent(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('unknownContent');

        return $value;
    }

    /**
     * Sets Set to true to exclude unknown content..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setUnknownContent(?bool $value): self
    {
        $this->setAttribute('unknownContent', $value);

        return $this;
    }
}
