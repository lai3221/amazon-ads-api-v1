<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * CreateRuleCriteria Description ------ ------ dimensionCriteria Defines dimension-based targeting criteria using generic dimension filters.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema CreateRuleCriteria.
 */
final class CreateRuleCriteria extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateRuleCriteria';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'dimensionCriteria',
            'required' => [
                'dimensionCriteria',
            ],
        ],
    ];
}
