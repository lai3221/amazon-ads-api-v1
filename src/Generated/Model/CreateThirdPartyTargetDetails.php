<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the CreateThirdPartyTargetDetails oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema CreateThirdPartyTargetDetails.
 */
final class CreateThirdPartyTargetDetails extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThirdPartyTargetDetails';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'doubleVerifyFraudInvalidTraffic',
            'required' => [
                'doubleVerifyFraudInvalidTraffic',
            ],
        ],
        [
            'title' => 'doubleVerifyStandardDisplayBrandSafety',
            'required' => [
                'doubleVerifyStandardDisplayBrandSafety',
            ],
        ],
        [
            'title' => 'doubleVerifyBrandSafety',
            'required' => [
                'doubleVerifyBrandSafety',
            ],
        ],
        [
            'title' => 'doubleVerifyViewability',
            'required' => [
                'doubleVerifyViewability',
            ],
        ],
        [
            'title' => 'doubleVerifyAuthenticBrandSafety',
            'required' => [
                'doubleVerifyAuthenticBrandSafety',
            ],
        ],
        [
            'title' => 'doubleVerifyCustomContextualSegmentId',
            'required' => [
                'doubleVerifyCustomContextualSegmentId',
            ],
        ],
        [
            'title' => 'doubleVerifyAuthenticAttention',
            'required' => [
                'doubleVerifyAuthenticAttention',
            ],
        ],
        [
            'title' => 'integralAdScienceFraudInvalidTraffic',
            'required' => [
                'integralAdScienceFraudInvalidTraffic',
            ],
        ],
        [
            'title' => 'integralAdScienceBrandSafety',
            'required' => [
                'integralAdScienceBrandSafety',
            ],
        ],
        [
            'title' => 'integralAdScienceViewability',
            'required' => [
                'integralAdScienceViewability',
            ],
        ],
        [
            'title' => 'integralAdScienceContextualTargeting',
            'required' => [
                'integralAdScienceContextualTargeting',
            ],
        ],
        [
            'title' => 'integralAdScienceContextualAvoidance',
            'required' => [
                'integralAdScienceContextualAvoidance',
            ],
        ],
        [
            'title' => 'pixalateFraudInvalidTraffic',
            'required' => [
                'pixalateFraudInvalidTraffic',
            ],
        ],
        [
            'title' => 'integralAdScienceQualitySync',
            'required' => [
                'integralAdScienceQualitySync',
            ],
        ],
        [
            'title' => 'newsGuardBrandGuardTrustedNewsTargeting',
            'required' => [
                'newsGuardBrandGuardTrustedNewsTargeting',
            ],
        ],
        [
            'title' => 'newsGuardBrandGuardMisinformationSafety',
            'required' => [
                'newsGuardBrandGuardMisinformationSafety',
            ],
        ],
    ];
}
