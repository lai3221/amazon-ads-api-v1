<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the StoreTile oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema StoreTile.
 */
final class StoreTile extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTile';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'storeCustomCodeTile',
            'required' => [
                'storeCustomCodeTile',
            ],
        ],
        [
            'title' => 'storeEmptyTile',
            'required' => [
                'storeEmptyTile',
            ],
        ],
        [
            'title' => 'storeImageTile',
            'required' => [
                'storeImageTile',
            ],
        ],
        [
            'title' => 'storeImageWithTextTile',
            'required' => [
                'storeImageWithTextTile',
            ],
        ],
        [
            'title' => 'storeProductTile',
            'required' => [
                'storeProductTile',
            ],
        ],
        [
            'title' => 'storeShoppableImageTile',
            'required' => [
                'storeShoppableImageTile',
            ],
        ],
        [
            'title' => 'storeTextTile',
            'required' => [
                'storeTextTile',
            ],
        ],
        [
            'title' => 'storeVideoTile',
            'required' => [
                'storeVideoTile',
            ],
        ],
    ];
}
