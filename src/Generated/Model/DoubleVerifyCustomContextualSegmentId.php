<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DoubleVerifyCustomContextualSegmentId schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DoubleVerifyCustomContextualSegmentId.
 */
final class DoubleVerifyCustomContextualSegmentId extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DoubleVerifyCustomContextualSegmentId';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'doubleVerifySegmentId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the doubleVerifySegmentId value.
     *
     * @return string|null
     */
    public function getDoubleVerifySegmentId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('doubleVerifySegmentId');

        return $value;
    }

    /**
     * Sets the doubleVerifySegmentId value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDoubleVerifySegmentId(?string $value): self
    {
        $this->setAttribute('doubleVerifySegmentId', $value);

        return $this;
    }
}
