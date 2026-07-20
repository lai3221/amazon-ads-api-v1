<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * AudioCreative Description ------ ------ standardAudioSettings The standard audio experience settings. See the Audio Spec for more info: https://advertising.amazon.com/en-us/resources/ad-specs/audio-ads?ref =a20m us spcs spcs aa.
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema AudioCreative.
 */
final class AudioCreative extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AudioCreative';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [
        [
            'title' => 'standardAudioSettings',
            'required' => [
                'standardAudioSettings',
            ],
        ],
    ];
}
