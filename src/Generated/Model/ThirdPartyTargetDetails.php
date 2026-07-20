<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the ThirdPartyTargetDetails oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema ThirdPartyTargetDetails.
 */
final class ThirdPartyTargetDetails extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ThirdPartyTargetDetails';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'doubleVerifyAuthenticAttention',
            'required' => [
                'doubleVerifyAuthenticAttention',
            ],
        ],
        [
            'title' => 'doubleVerifyAuthenticBrandSafety',
            'required' => [
                'doubleVerifyAuthenticBrandSafety',
            ],
        ],
        [
            'title' => 'doubleVerifyBrandSafety',
            'required' => [
                'doubleVerifyBrandSafety',
            ],
        ],
        [
            'title' => 'doubleVerifyCustomContextualSegmentId',
            'required' => [
                'doubleVerifyCustomContextualSegmentId',
            ],
        ],
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
            'title' => 'doubleVerifyViewability',
            'required' => [
                'doubleVerifyViewability',
            ],
        ],
        [
            'title' => 'integralAdScienceBrandSafety',
            'required' => [
                'integralAdScienceBrandSafety',
            ],
        ],
        [
            'title' => 'integralAdScienceContextualAvoidance',
            'required' => [
                'integralAdScienceContextualAvoidance',
            ],
        ],
        [
            'title' => 'integralAdScienceContextualTargeting',
            'required' => [
                'integralAdScienceContextualTargeting',
            ],
        ],
        [
            'title' => 'integralAdScienceFraudInvalidTraffic',
            'required' => [
                'integralAdScienceFraudInvalidTraffic',
            ],
        ],
        [
            'title' => 'integralAdScienceQualitySync',
            'required' => [
                'integralAdScienceQualitySync',
            ],
        ],
        [
            'title' => 'integralAdScienceViewability',
            'required' => [
                'integralAdScienceViewability',
            ],
        ],
        [
            'title' => 'newsGuardBrandGuardMisinformationSafety',
            'required' => [
                'newsGuardBrandGuardMisinformationSafety',
            ],
        ],
        [
            'title' => 'newsGuardBrandGuardTrustedNewsTargeting',
            'required' => [
                'newsGuardBrandGuardTrustedNewsTargeting',
            ],
        ],
        [
            'title' => 'pixalateFraudInvalidTraffic',
            'required' => [
                'pixalateFraudInvalidTraffic',
            ],
        ],
    ];
}
