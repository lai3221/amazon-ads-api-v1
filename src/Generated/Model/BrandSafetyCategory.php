<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * BrandSafetyCategory Enum:.
 *
 * @generated from Amazon Ads API v1 schema BrandSafetyCategory.
 */
enum BrandSafetyCategory: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandSafetyCategory';

    case ACCIDENTS_DISASTERS_AND_TRAGEDIES = 'ACCIDENTS_DISASTERS_AND_TRAGEDIES';
    case ALCOHOL_AND_RELATED_PRODUCTS = 'ALCOHOL_AND_RELATED_PRODUCTS';
    case BLOOD_GORE_VIOLENCE = 'BLOOD_GORE_VIOLENCE';
    case CRIME = 'CRIME';
    case DRUG_REFERENCES_OR_USE = 'DRUG_REFERENCES_OR_USE';
    case GAMBLING = 'GAMBLING';
    case HIGHLY_DEBATED_SOCIAL_ISSUES = 'HIGHLY_DEBATED_SOCIAL_ISSUES';
    case POLITICS = 'POLITICS';
    case PROFANITY = 'PROFANITY';
    case RELIGIOUS_CONTENT = 'RELIGIOUS_CONTENT';
    case SEXUAL_REFERENCES_AND_SUGGESTIVE = 'SEXUAL_REFERENCES_AND_SUGGESTIVE';
    case SHOCK_AND_HORROR = 'SHOCK_AND_HORROR';
    case TOBACCO_AND_RELATED_PRODUCTS = 'TOBACCO_AND_RELATED_PRODUCTS';
    case UNRATED_MEDIA_CONTENT = 'UNRATED_MEDIA_CONTENT';
    case WEAPONS = 'WEAPONS';

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
