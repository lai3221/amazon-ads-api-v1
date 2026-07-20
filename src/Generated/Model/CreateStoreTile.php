<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the CreateStoreTile oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreTile.
 */
final class CreateStoreTile extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreTile';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'storeImageWithTextTile',
            'required' => [
                'storeImageWithTextTile',
            ],
        ],
        [
            'title' => 'storeImageTile',
            'required' => [
                'storeImageTile',
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
        [
            'title' => 'storeEmptyTile',
            'required' => [
                'storeEmptyTile',
            ],
        ],
        [
            'title' => 'storeCustomCodeTile',
            'required' => [
                'storeCustomCodeTile',
            ],
        ],
    ];
}
