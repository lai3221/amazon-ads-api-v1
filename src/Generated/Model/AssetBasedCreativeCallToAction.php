<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Represents the AssetBasedCreativeCallToAction oneOf schema from Amazon Ads API v1.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema AssetBasedCreativeCallToAction.
 */
final class AssetBasedCreativeCallToAction extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AssetBasedCreativeCallToAction';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'assetBasedCreativeCallToActionSettings',
            'required' => [
                'assetBasedCreativeCallToActionSettings',
            ],
        ],
    ];
}
