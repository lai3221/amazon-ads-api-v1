<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Union of all possible widget types that can be used on a store page.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema StorePageWidget.
 */
final class StorePageWidget extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StorePageWidget';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
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
            'title' => 'storeCustomCodeWidget',
            'required' => [
                'storeCustomCodeWidget',
            ],
        ],
        [
            'title' => 'storeDealsWidget',
            'required' => [
                'storeDealsWidget',
            ],
        ],
        [
            'title' => 'storeGalleryWidget',
            'required' => [
                'storeGalleryWidget',
            ],
        ],
        [
            'title' => 'storeHeroImageWidget',
            'required' => [
                'storeHeroImageWidget',
            ],
        ],
        [
            'title' => 'storeImageWidget',
            'required' => [
                'storeImageWidget',
            ],
        ],
        [
            'title' => 'storeImageWithTextWidget',
            'required' => [
                'storeImageWithTextWidget',
            ],
        ],
        [
            'title' => 'storeLiveVideoWidget',
            'required' => [
                'storeLiveVideoWidget',
            ],
        ],
        [
            'title' => 'storeManuallyCuratedProductCarouselWidget',
            'required' => [
                'storeManuallyCuratedProductCarouselWidget',
            ],
        ],
        [
            'title' => 'storeProductCarouselWidget',
            'required' => [
                'storeProductCarouselWidget',
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
            'title' => 'storeProductWidget',
            'required' => [
                'storeProductWidget',
            ],
        ],
        [
            'title' => 'storeShopTheLookWidget',
            'required' => [
                'storeShopTheLookWidget',
            ],
        ],
        [
            'title' => 'storeShoppableImageWidget',
            'required' => [
                'storeShoppableImageWidget',
            ],
        ],
        [
            'title' => 'storeTextWidget',
            'required' => [
                'storeTextWidget',
            ],
        ],
        [
            'title' => 'storeTileWidget',
            'required' => [
                'storeTileWidget',
            ],
        ],
        [
            'title' => 'storeVideoWidget',
            'required' => [
                'storeVideoWidget',
            ],
        ],
    ];
}
