<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DoubleVerifyBrandSafety schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DoubleVerifyBrandSafety.
 */
final class DoubleVerifyBrandSafety extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DoubleVerifyBrandSafety';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'appAgeRating' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => DVBrandSafetyAppAgeRatingType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'appStarRating' => [
            'type' => 'enum',
            'class' => DVBrandSafetyAppStarRatingType::class,
            'required' => false,
            'nullable' => false,
        ],
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
                'class' => DVBrandSafetyContentCategoriesWithRiskMap::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'excludeAppsWithInsufficientRating' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'unknownContent' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A list of app age ratings to be used for excluding apps. For example, TEENS 12 PLUS will only exclude apps with content rated for everyone ages 12 and over. UNKNOWN will exclude apps with content unrated or unknown to Double Verify..
     *
     * @return list<DVBrandSafetyAppAgeRatingType>|null
     */
    public function getAppAgeRating(): ?array
    {
        /** @var list<DVBrandSafetyAppAgeRatingType>|null $value */
        $value = $this->getAttribute('appAgeRating');

        return $value;
    }

    /**
     * Sets A list of app age ratings to be used for excluding apps. For example, TEENS 12 PLUS will only exclude apps with content rated for everyone ages 12 and over. UNKNOWN will exclude apps with content unrated or unknown to Double Verify..
     *
     * @param list<DVBrandSafetyAppAgeRatingType>|null $value New property value.
     * @return $this
     */
    public function setAppAgeRating(?array $value): self
    {
        $this->setAttribute('appAgeRating', $value);

        return $this;
    }

    /**
     * Returns the appStarRating value.
     *
     * @return DVBrandSafetyAppStarRatingType|null
     */
    public function getAppStarRating(): ?DVBrandSafetyAppStarRatingType
    {
        /** @var DVBrandSafetyAppStarRatingType|null $value */
        $value = $this->getAttribute('appStarRating');

        return $value;
    }

    /**
     * Sets the appStarRating value.
     *
     * @param DVBrandSafetyAppStarRatingType|string|null $value New property value.
     * @return $this
     */
    public function setAppStarRating(DVBrandSafetyAppStarRatingType|string|null $value): self
    {
        $this->setAttribute('appStarRating', $value);

        return $this;
    }

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
     * @return list<DVBrandSafetyContentCategoriesWithRiskMap>|null
     */
    public function getContentCategoriesWithRisk(): ?array
    {
        /** @var list<DVBrandSafetyContentCategoriesWithRiskMap>|null $value */
        $value = $this->getAttribute('contentCategoriesWithRisk');

        return $value;
    }

    /**
     * Sets the contentCategoriesWithRisk value.
     *
     * @param list<DVBrandSafetyContentCategoriesWithRiskMap>|null $value New property value.
     * @return $this
     */
    public function setContentCategoriesWithRisk(?array $value): self
    {
        $this->setAttribute('contentCategoriesWithRisk', $value);

        return $this;
    }

    /**
     * Returns Set to true to exclude unofficial apps or apps with insufficient user ratings (..
     *
     * @return bool|null
     */
    public function getExcludeAppsWithInsufficientRating(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeAppsWithInsufficientRating');

        return $value;
    }

    /**
     * Sets Set to true to exclude unofficial apps or apps with insufficient user ratings (..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeAppsWithInsufficientRating(?bool $value): self
    {
        $this->setAttribute('excludeAppsWithInsufficientRating', $value);

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
