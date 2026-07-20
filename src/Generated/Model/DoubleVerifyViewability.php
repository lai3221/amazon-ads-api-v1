<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DoubleVerifyViewability schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DoubleVerifyViewability.
 */
final class DoubleVerifyViewability extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DoubleVerifyViewability';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'averageCompletionAndFullyViewableRateTargeting' => [
            'type' => 'enum',
            'class' => AverageCompletionAndFullyViewableRateTargetingType::class,
            'required' => false,
            'nullable' => false,
        ],
        'brandExposureViewabilityTargeting' => [
            'type' => 'enum',
            'class' => BrandExposureViewabilityTargetingType::class,
            'required' => false,
            'nullable' => false,
        ],
        'includeUnmeasurableImpressions' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'mrcViewabilityTargeting' => [
            'type' => 'enum',
            'class' => MrcViewabilityTargetingType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the averageCompletionAndFullyViewableRateTargeting value.
     *
     * @return AverageCompletionAndFullyViewableRateTargetingType|null
     */
    public function getAverageCompletionAndFullyViewableRateTargeting(): ?AverageCompletionAndFullyViewableRateTargetingType
    {
        /** @var AverageCompletionAndFullyViewableRateTargetingType|null $value */
        $value = $this->getAttribute('averageCompletionAndFullyViewableRateTargeting');

        return $value;
    }

    /**
     * Sets the averageCompletionAndFullyViewableRateTargeting value.
     *
     * @param AverageCompletionAndFullyViewableRateTargetingType|string|null $value New property value.
     * @return $this
     */
    public function setAverageCompletionAndFullyViewableRateTargeting(AverageCompletionAndFullyViewableRateTargetingType|string|null $value): self
    {
        $this->setAttribute('averageCompletionAndFullyViewableRateTargeting', $value);

        return $this;
    }

    /**
     * Returns the brandExposureViewabilityTargeting value.
     *
     * @return BrandExposureViewabilityTargetingType|null
     */
    public function getBrandExposureViewabilityTargeting(): ?BrandExposureViewabilityTargetingType
    {
        /** @var BrandExposureViewabilityTargetingType|null $value */
        $value = $this->getAttribute('brandExposureViewabilityTargeting');

        return $value;
    }

    /**
     * Sets the brandExposureViewabilityTargeting value.
     *
     * @param BrandExposureViewabilityTargetingType|string|null $value New property value.
     * @return $this
     */
    public function setBrandExposureViewabilityTargeting(BrandExposureViewabilityTargetingType|string|null $value): self
    {
        $this->setAttribute('brandExposureViewabilityTargeting', $value);

        return $this;
    }

    /**
     * Returns Set to true to include impressions where impressions can't be measured..
     *
     * @return bool|null
     */
    public function getIncludeUnmeasurableImpressions(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('includeUnmeasurableImpressions');

        return $value;
    }

    /**
     * Sets Set to true to include impressions where impressions can't be measured..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIncludeUnmeasurableImpressions(?bool $value): self
    {
        $this->setAttribute('includeUnmeasurableImpressions', $value);

        return $this;
    }

    /**
     * Returns the mrcViewabilityTargeting value.
     *
     * @return MrcViewabilityTargetingType|null
     */
    public function getMrcViewabilityTargeting(): ?MrcViewabilityTargetingType
    {
        /** @var MrcViewabilityTargetingType|null $value */
        $value = $this->getAttribute('mrcViewabilityTargeting');

        return $value;
    }

    /**
     * Sets the mrcViewabilityTargeting value.
     *
     * @param MrcViewabilityTargetingType|string|null $value New property value.
     * @return $this
     */
    public function setMrcViewabilityTargeting(MrcViewabilityTargetingType|string|null $value): self
    {
        $this->setAttribute('mrcViewabilityTargeting', $value);

        return $this;
    }
}
