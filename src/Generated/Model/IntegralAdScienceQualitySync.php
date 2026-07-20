<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the IntegralAdScienceQualitySync schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema IntegralAdScienceQualitySync.
 */
final class IntegralAdScienceQualitySync extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IntegralAdScienceQualitySync';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'segmentId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the segmentId value.
     *
     * @return string|null
     */
    public function getSegmentId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('segmentId');

        return $value;
    }

    /**
     * Sets the segmentId value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSegmentId(?string $value): self
    {
        $this->setAttribute('segmentId', $value);

        return $this;
    }
}
