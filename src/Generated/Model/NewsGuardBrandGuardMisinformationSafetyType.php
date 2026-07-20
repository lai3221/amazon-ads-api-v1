<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Represents the NewsGuardBrandGuardMisinformationSafetyType values defined by Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema NewsGuardBrandGuardMisinformationSafetyType.
 */
enum NewsGuardBrandGuardMisinformationSafetyType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'NewsGuardBrandGuardMisinformationSafetyType';

    case AI_GENERATED_MFA = 'AI_GENERATED_MFA';
    case BASIC_EXCLUDE = 'BASIC_EXCLUDE';
    case CLIMATE_MISINFORMATION = 'CLIMATE_MISINFORMATION';
    case COVID_MISINFORMATION = 'COVID_MISINFORMATION';
    case ELECTION_MISINFORMATION = 'ELECTION_MISINFORMATION';
    case HEALTH_MISINFORMATION = 'HEALTH_MISINFORMATION';
    case HIGH_EXCLUDE = 'HIGH_EXCLUDE';
    case ISRAEL_HAMAS_MISINFORMATION = 'ISRAEL_HAMAS_MISINFORMATION';
    case MAX_EXCLUDE = 'MAX_EXCLUDE';
    case MISINFORMATION_SITES = 'MISINFORMATION_SITES';
    case OPINIONATED_NEWS = 'OPINIONATED_NEWS';
    case QANON_MISINFORMATION = 'QANON_MISINFORMATION';
    case UKRAINE_MISINFORMATION = 'UKRAINE_MISINFORMATION';
    case VACCINE_MISINFORMATION = 'VACCINE_MISINFORMATION';

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
