<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target customers who have viewed or purchased a certain product within a specified lookback window.
 *
 * @generated from Amazon Ads API v1 schema ProductAudienceTarget.
 */
final class ProductAudienceTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductAudienceTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'asin' => [
            'type' => 'model',
            'class' => MarketplaceStringValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'event' => [
            'type' => 'enum',
            'class' => TargetEvent::class,
            'required' => true,
            'nullable' => false,
        ],
        'lookback' => [
            'type' => 'enum',
            'class' => Lookback::class,
            'required' => true,
            'nullable' => false,
        ],
        'matchType' => [
            'type' => 'enum',
            'class' => ProductAudienceMatchType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the asin value.
     *
     * @return MarketplaceStringValue|null
     */
    public function getAsin(): ?MarketplaceStringValue
    {
        /** @var MarketplaceStringValue|null $value */
        $value = $this->getAttribute('asin');

        return $value;
    }

    /**
     * Sets the asin value.
     *
     * @param MarketplaceStringValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAsin(MarketplaceStringValue|array|null $value): self
    {
        $this->setAttribute('asin', $value);

        return $this;
    }

    /**
     * Returns the event value.
     *
     * @return TargetEvent|null
     */
    public function getEvent(): ?TargetEvent
    {
        /** @var TargetEvent|null $value */
        $value = $this->getAttribute('event');

        return $value;
    }

    /**
     * Sets the event value.
     *
     * @param TargetEvent|string|null $value New property value.
     * @return $this
     */
    public function setEvent(TargetEvent|string|null $value): self
    {
        $this->setAttribute('event', $value);

        return $this;
    }

    /**
     * Returns the lookback value.
     *
     * @return Lookback|null
     */
    public function getLookback(): ?Lookback
    {
        /** @var Lookback|null $value */
        $value = $this->getAttribute('lookback');

        return $value;
    }

    /**
     * Sets the lookback value.
     *
     * @param Lookback|string|null $value New property value.
     * @return $this
     */
    public function setLookback(Lookback|string|null $value): self
    {
        $this->setAttribute('lookback', $value);

        return $this;
    }

    /**
     * Returns the matchType value.
     *
     * @return ProductAudienceMatchType|null
     */
    public function getMatchType(): ?ProductAudienceMatchType
    {
        /** @var ProductAudienceMatchType|null $value */
        $value = $this->getAttribute('matchType');

        return $value;
    }

    /**
     * Sets the matchType value.
     *
     * @param ProductAudienceMatchType|string|null $value New property value.
     * @return $this
     */
    public function setMatchType(ProductAudienceMatchType|string|null $value): self
    {
        $this->setAttribute('matchType', $value);

        return $this;
    }
}
