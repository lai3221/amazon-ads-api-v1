<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * ReportCreateAccessRequestedAccountItem Description --- --- advertiserAccountId ADSP Regional Account or Global Account managerAccountId Manager Account.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema ReportCreateAccessRequestedAccountItem.
 */
final class ReportCreateAccessRequestedAccountItem extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportCreateAccessRequestedAccountItem';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'advertiserAccountId',
            'required' => [
                'advertiserAccountId',
            ],
        ],
        [
            'title' => 'managerAccountId',
            'required' => [
                'managerAccountId',
            ],
        ],
    ];
}
