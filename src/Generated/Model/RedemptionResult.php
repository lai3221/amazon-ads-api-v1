<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * Types of rewards that can be redeemed through a promotion code redemption. RedemptionResult Description --- --- promotionOffer A promotion offer that was redeemed.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema RedemptionResult.
 */
final class RedemptionResult extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RedemptionResult';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'promotionOffer',
            'required' => [
                'promotionOffer',
            ],
        ],
    ];
}
