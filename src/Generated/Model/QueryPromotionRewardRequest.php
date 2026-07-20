<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryPromotionRewardRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryPromotionRewardRequest.
 */
final class QueryPromotionRewardRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryPromotionRewardRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endDateTimeFilter' => [
            'type' => 'model',
            'class' => PromotionRewardEndDateTimeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'includePromotionRewardConsumptionFilter' => [
            'type' => 'model',
            'class' => PromotionRewardIncludePromotionRewardConsumptionFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceFilter' => [
            'type' => 'model',
            'class' => PromotionRewardMarketplaceFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 25,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'promotionRewardIdFilter' => [
            'type' => 'model',
            'class' => PromotionRewardPromotionRewardIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'promotionRewardTypeFilter' => [
            'type' => 'model',
            'class' => PromotionRewardPromotionRewardTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'startDateTimeFilter' => [
            'type' => 'model',
            'class' => PromotionRewardStartDateTimeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the endDateTimeFilter value.
     *
     * @return PromotionRewardEndDateTimeFilter|null
     */
    public function getEndDateTimeFilter(): ?PromotionRewardEndDateTimeFilter
    {
        /** @var PromotionRewardEndDateTimeFilter|null $value */
        $value = $this->getAttribute('endDateTimeFilter');

        return $value;
    }

    /**
     * Sets the endDateTimeFilter value.
     *
     * @param PromotionRewardEndDateTimeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEndDateTimeFilter(PromotionRewardEndDateTimeFilter|array|null $value): self
    {
        $this->setAttribute('endDateTimeFilter', $value);

        return $this;
    }

    /**
     * Returns the includePromotionRewardConsumptionFilter value.
     *
     * @return PromotionRewardIncludePromotionRewardConsumptionFilter|null
     */
    public function getIncludePromotionRewardConsumptionFilter(): ?PromotionRewardIncludePromotionRewardConsumptionFilter
    {
        /** @var PromotionRewardIncludePromotionRewardConsumptionFilter|null $value */
        $value = $this->getAttribute('includePromotionRewardConsumptionFilter');

        return $value;
    }

    /**
     * Sets the includePromotionRewardConsumptionFilter value.
     *
     * @param PromotionRewardIncludePromotionRewardConsumptionFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIncludePromotionRewardConsumptionFilter(PromotionRewardIncludePromotionRewardConsumptionFilter|array|null $value): self
    {
        $this->setAttribute('includePromotionRewardConsumptionFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceFilter value.
     *
     * @return PromotionRewardMarketplaceFilter|null
     */
    public function getMarketplaceFilter(): ?PromotionRewardMarketplaceFilter
    {
        /** @var PromotionRewardMarketplaceFilter|null $value */
        $value = $this->getAttribute('marketplaceFilter');

        return $value;
    }

    /**
     * Sets the marketplaceFilter value.
     *
     * @param PromotionRewardMarketplaceFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceFilter(PromotionRewardMarketplaceFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceFilter', $value);

        return $this;
    }

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }

    /**
     * Returns the promotionRewardIdFilter value.
     *
     * @return PromotionRewardPromotionRewardIdFilter|null
     */
    public function getPromotionRewardIdFilter(): ?PromotionRewardPromotionRewardIdFilter
    {
        /** @var PromotionRewardPromotionRewardIdFilter|null $value */
        $value = $this->getAttribute('promotionRewardIdFilter');

        return $value;
    }

    /**
     * Sets the promotionRewardIdFilter value.
     *
     * @param PromotionRewardPromotionRewardIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardIdFilter(PromotionRewardPromotionRewardIdFilter|array|null $value): self
    {
        $this->setAttribute('promotionRewardIdFilter', $value);

        return $this;
    }

    /**
     * Returns the promotionRewardTypeFilter value.
     *
     * @return PromotionRewardPromotionRewardTypeFilter|null
     */
    public function getPromotionRewardTypeFilter(): ?PromotionRewardPromotionRewardTypeFilter
    {
        /** @var PromotionRewardPromotionRewardTypeFilter|null $value */
        $value = $this->getAttribute('promotionRewardTypeFilter');

        return $value;
    }

    /**
     * Sets the promotionRewardTypeFilter value.
     *
     * @param PromotionRewardPromotionRewardTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPromotionRewardTypeFilter(PromotionRewardPromotionRewardTypeFilter|array|null $value): self
    {
        $this->setAttribute('promotionRewardTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the startDateTimeFilter value.
     *
     * @return PromotionRewardStartDateTimeFilter|null
     */
    public function getStartDateTimeFilter(): ?PromotionRewardStartDateTimeFilter
    {
        /** @var PromotionRewardStartDateTimeFilter|null $value */
        $value = $this->getAttribute('startDateTimeFilter');

        return $value;
    }

    /**
     * Sets the startDateTimeFilter value.
     *
     * @param PromotionRewardStartDateTimeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStartDateTimeFilter(PromotionRewardStartDateTimeFilter|array|null $value): self
    {
        $this->setAttribute('startDateTimeFilter', $value);

        return $this;
    }
}
