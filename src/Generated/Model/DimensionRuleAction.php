<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * The action to apply when dimension rule conditions are met.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema DimensionRuleAction.
 */
final class DimensionRuleAction extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DimensionRuleAction';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'tierAdjustment',
            'required' => [
                'tierAdjustment',
            ],
        ],
        [
            'title' => 'valueAdjustment',
            'required' => [
                'valueAdjustment',
            ],
        ],
    ];
}
