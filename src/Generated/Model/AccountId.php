<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * AccountId Description ------ ------ advertiserAccountId This represents an advertiser account. It can be a global advertiser account that works across countries (ex: amzn1.ads-account.g.a1bc2de3fg4hi5jk6lm7no8pq) or a DSP-only advertiser account (ex: 123456.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema AccountId.
 */
final class AccountId extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AccountId';

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
    ];
}
