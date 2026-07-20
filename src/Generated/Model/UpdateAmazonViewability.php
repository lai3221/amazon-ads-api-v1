<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAmazonViewability schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAmazonViewability.
 */
final class UpdateAmazonViewability extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAmazonViewability';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'includeUnmeasurableImpressions' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'viewabilityTier' => [
            'type' => 'enum',
            'class' => ViewabilityTier::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Must be false if viewabilityTier is set to ALL TIERS. You can set to true to include impressions that can not be measured when a viewabilityTier other than ALL TIERS is selected. We recommend setting to false if high viewability is your goal..
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
     * Sets Must be false if viewabilityTier is set to ALL TIERS. You can set to true to include impressions that can not be measured when a viewabilityTier other than ALL TIERS is selected. We recommend setting to false if high viewability is your goal..
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
     * Returns the viewabilityTier value.
     *
     * @return ViewabilityTier|null
     */
    public function getViewabilityTier(): ?ViewabilityTier
    {
        /** @var ViewabilityTier|null $value */
        $value = $this->getAttribute('viewabilityTier');

        return $value;
    }

    /**
     * Sets the viewabilityTier value.
     *
     * @param ViewabilityTier|string|null $value New property value.
     * @return $this
     */
    public function setViewabilityTier(ViewabilityTier|string|null $value): self
    {
        $this->setAttribute('viewabilityTier', $value);

        return $this;
    }
}
