<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the CreateTargetDetails oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema CreateTargetDetails.
 */
final class CreateTargetDetails extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTargetDetails';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'keywordTarget',
            'required' => [
                'keywordTarget',
            ],
        ],
        [
            'title' => 'productTarget',
            'required' => [
                'productTarget',
            ],
        ],
        [
            'title' => 'productCategoryTarget',
            'required' => [
                'productCategoryTarget',
            ],
        ],
        [
            'title' => 'productAudienceTarget',
            'required' => [
                'productAudienceTarget',
            ],
        ],
        [
            'title' => 'audienceTarget',
            'required' => [
                'audienceTarget',
            ],
        ],
        [
            'title' => 'locationTarget',
            'required' => [
                'locationTarget',
            ],
        ],
        [
            'title' => 'domainTarget',
            'required' => [
                'domainTarget',
            ],
        ],
        [
            'title' => 'appTarget',
            'required' => [
                'appTarget',
            ],
        ],
        [
            'title' => 'deviceTarget',
            'required' => [
                'deviceTarget',
            ],
        ],
        [
            'title' => 'dayPartTarget',
            'required' => [
                'dayPartTarget',
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
            'title' => 'contentRatingTarget',
            'required' => [
                'contentRatingTarget',
            ],
        ],
        [
            'title' => 'brandSafetyTierTarget',
            'required' => [
                'brandSafetyTierTarget',
            ],
        ],
        [
            'title' => 'brandSafetyCategoryTarget',
            'required' => [
                'brandSafetyCategoryTarget',
            ],
        ],
        [
            'title' => 'inventorySourceTarget',
            'required' => [
                'inventorySourceTarget',
            ],
        ],
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
            'title' => 'videoAdFormatTarget',
            'required' => [
                'videoAdFormatTarget',
            ],
        ],
        [
            'title' => 'thirdPartyTarget',
            'required' => [
                'thirdPartyTarget',
            ],
        ],
        [
            'title' => 'themeTarget',
            'required' => [
                'themeTarget',
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
            'title' => 'videoContentDurationTarget',
            'required' => [
                'videoContentDurationTarget',
            ],
        ],
        [
            'title' => 'foldPositionTarget',
            'required' => [
                'foldPositionTarget',
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
    ];
}
