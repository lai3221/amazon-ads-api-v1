<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Union of all possible widget types that can be used on a store page.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema CreateStorePageWidget.
 */
final class CreateStorePageWidget extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStorePageWidget';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'storeHeroImageWidget',
            'required' => [
                'storeHeroImageWidget',
            ],
        ],
        [
            'title' => 'storeTileWidget',
            'required' => [
                'storeTileWidget',
            ],
        ],
        [
            'title' => 'storeImageWidget',
            'required' => [
                'storeImageWidget',
            ],
        ],
        [
            'title' => 'storeTextWidget',
            'required' => [
                'storeTextWidget',
            ],
        ],
        [
            'title' => 'storeImageWithTextWidget',
            'required' => [
                'storeImageWithTextWidget',
            ],
        ],
        [
            'title' => 'storeProductCollectionWidget',
            'required' => [
                'storeProductCollectionWidget',
            ],
        ],
        [
            'title' => 'storeProductGridWidget',
            'required' => [
                'storeProductGridWidget',
            ],
        ],
        [
            'title' => 'storeDealsWidget',
            'required' => [
                'storeDealsWidget',
            ],
        ],
        [
            'title' => 'storeProductWidget',
            'required' => [
                'storeProductWidget',
            ],
        ],
        [
            'title' => 'storeShoppableImageWidget',
            'required' => [
                'storeShoppableImageWidget',
            ],
        ],
        [
            'title' => 'storeCustomCodeWidget',
            'required' => [
                'storeCustomCodeWidget',
            ],
        ],
        [
            'title' => 'storeVideoWidget',
            'required' => [
                'storeVideoWidget',
            ],
        ],
        [
            'title' => 'storeGalleryWidget',
            'required' => [
                'storeGalleryWidget',
            ],
        ],
        [
            'title' => 'storeShopTheLookWidget',
            'required' => [
                'storeShopTheLookWidget',
            ],
        ],
        [
            'title' => 'storeManuallyCuratedProductCarouselWidget',
            'required' => [
                'storeManuallyCuratedProductCarouselWidget',
            ],
        ],
        [
            'title' => 'storeAWLSWidget',
            'required' => [
                'storeAWLSWidget',
            ],
        ],
        [
            'title' => 'storeBannerWidget',
            'required' => [
                'storeBannerWidget',
            ],
        ],
        [
            'title' => 'storeProductCarouselWidget',
            'required' => [
                'storeProductCarouselWidget',
            ],
        ],
        [
            'title' => 'storeLiveVideoWidget',
            'required' => [
                'storeLiveVideoWidget',
            ],
        ],
    ];
}
