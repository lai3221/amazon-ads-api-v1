<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the TargetDetails oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema TargetDetails.
 */
final class TargetDetails extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetDetails';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'adInitiationTarget',
            'required' => [
                'adInitiationTarget',
            ],
        ],
        [
            'title' => 'adPlayerSizeTarget',
            'required' => [
                'adPlayerSizeTarget',
            ],
        ],
        [
            'title' => 'appTarget',
            'required' => [
                'appTarget',
            ],
        ],
        [
            'title' => 'audienceTarget',
            'required' => [
                'audienceTarget',
            ],
        ],
        [
            'title' => 'brandSafetyCategoryTarget',
            'required' => [
                'brandSafetyCategoryTarget',
            ],
        ],
        [
            'title' => 'brandSafetyTierTarget',
            'required' => [
                'brandSafetyTierTarget',
            ],
        ],
        [
            'title' => 'contentCategoryTarget',
            'required' => [
                'contentCategoryTarget',
            ],
        ],
        [
            'title' => 'contentGenreTarget',
            'required' => [
                'contentGenreTarget',
            ],
        ],
        [
            'title' => 'contentInstreamPositionTarget',
            'required' => [
                'contentInstreamPositionTarget',
            ],
        ],
        [
            'title' => 'contentOutstreamPositionTarget',
            'required' => [
                'contentOutstreamPositionTarget',
            ],
        ],
        [
            'title' => 'contentRatingTarget',
            'required' => [
                'contentRatingTarget',
            ],
        ],
        [
            'title' => 'dayPartTarget',
            'required' => [
                'dayPartTarget',
            ],
        ],
        [
            'title' => 'deviceTarget',
            'required' => [
                'deviceTarget',
            ],
        ],
        [
            'title' => 'domainTarget',
            'required' => [
                'domainTarget',
            ],
        ],
        [
            'title' => 'foldPositionTarget',
            'required' => [
                'foldPositionTarget',
            ],
        ],
        [
            'title' => 'inventorySourceTarget',
            'required' => [
                'inventorySourceTarget',
            ],
        ],
        [
            'title' => 'keywordTarget',
            'required' => [
                'keywordTarget',
            ],
        ],
        [
            'title' => 'locationTarget',
            'required' => [
                'locationTarget',
            ],
        ],
        [
            'title' => 'nativeContentPositionTarget',
            'required' => [
                'nativeContentPositionTarget',
            ],
        ],
        [
            'title' => 'placementTypeTarget',
            'required' => [
                'placementTypeTarget',
            ],
        ],
        [
            'title' => 'productAudienceTarget',
            'required' => [
                'productAudienceTarget',
            ],
        ],
        [
            'title' => 'productCategoryTarget',
            'required' => [
                'productCategoryTarget',
            ],
        ],
        [
            'title' => 'productTarget',
            'required' => [
                'productTarget',
            ],
        ],
        [
            'title' => 'themeTarget',
            'required' => [
                'themeTarget',
            ],
        ],
        [
            'title' => 'thirdPartyTarget',
            'required' => [
                'thirdPartyTarget',
            ],
        ],
        [
            'title' => 'videoAdFormatTarget',
            'required' => [
                'videoAdFormatTarget',
            ],
        ],
        [
            'title' => 'videoContentDurationTarget',
            'required' => [
                'videoContentDurationTarget',
            ],
        ],
    ];
}
