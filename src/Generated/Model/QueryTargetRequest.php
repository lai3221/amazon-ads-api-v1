<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryTargetRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryTargetRequest.
 */
final class QueryTargetRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryTargetRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroupIdFilter' => [
            'type' => 'model',
            'class' => TargetAdGroupIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adProductFilter' => [
            'type' => 'model',
            'class' => TargetAdProductFilter::class,
            'required' => true,
            'nullable' => false,
        ],
        'campaignIdFilter' => [
            'type' => 'model',
            'class' => TargetCampaignIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'inventorySourceIdFilter' => [
            'type' => 'model',
            'class' => TargetMarketplaceStringValueFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'inventorySourceTypeFilter' => [
            'type' => 'model',
            'class' => TargetInventorySourceTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'keywordFilter' => [
            'type' => 'model',
            'class' => TargetKeywordFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceScopeFilter' => [
            'type' => 'model',
            'class' => TargetMarketplaceScopeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'matchTypeFilter' => [
            'type' => 'model',
            'class' => TargetMatchTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 5000,
        ],
        'nativeLanguageLocaleFilter' => [
            'type' => 'model',
            'class' => TargetLanguageLocaleFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'negativeFilter' => [
            'type' => 'model',
            'class' => TargetNegativeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'productIdFilter' => [
            'type' => 'model',
            'class' => TargetProductIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => TargetStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'targetIdFilter' => [
            'type' => 'model',
            'class' => TargetTargetIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'targetTypeFilter' => [
            'type' => 'model',
            'class' => TargetTargetTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adGroupIdFilter value.
     *
     * @return TargetAdGroupIdFilter|null
     */
    public function getAdGroupIdFilter(): ?TargetAdGroupIdFilter
    {
        /** @var TargetAdGroupIdFilter|null $value */
        $value = $this->getAttribute('adGroupIdFilter');

        return $value;
    }

    /**
     * Sets the adGroupIdFilter value.
     *
     * @param TargetAdGroupIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroupIdFilter(TargetAdGroupIdFilter|array|null $value): self
    {
        $this->setAttribute('adGroupIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adProductFilter value.
     *
     * @return TargetAdProductFilter|null
     */
    public function getAdProductFilter(): ?TargetAdProductFilter
    {
        /** @var TargetAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param TargetAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(TargetAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

        return $this;
    }

    /**
     * Returns the campaignIdFilter value.
     *
     * @return TargetCampaignIdFilter|null
     */
    public function getCampaignIdFilter(): ?TargetCampaignIdFilter
    {
        /** @var TargetCampaignIdFilter|null $value */
        $value = $this->getAttribute('campaignIdFilter');

        return $value;
    }

    /**
     * Sets the campaignIdFilter value.
     *
     * @param TargetCampaignIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCampaignIdFilter(TargetCampaignIdFilter|array|null $value): self
    {
        $this->setAttribute('campaignIdFilter', $value);

        return $this;
    }

    /**
     * Returns the inventorySourceIdFilter value.
     *
     * @return TargetMarketplaceStringValueFilter|null
     */
    public function getInventorySourceIdFilter(): ?TargetMarketplaceStringValueFilter
    {
        /** @var TargetMarketplaceStringValueFilter|null $value */
        $value = $this->getAttribute('inventorySourceIdFilter');

        return $value;
    }

    /**
     * Sets the inventorySourceIdFilter value.
     *
     * @param TargetMarketplaceStringValueFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setInventorySourceIdFilter(TargetMarketplaceStringValueFilter|array|null $value): self
    {
        $this->setAttribute('inventorySourceIdFilter', $value);

        return $this;
    }

    /**
     * Returns the inventorySourceTypeFilter value.
     *
     * @return TargetInventorySourceTypeFilter|null
     */
    public function getInventorySourceTypeFilter(): ?TargetInventorySourceTypeFilter
    {
        /** @var TargetInventorySourceTypeFilter|null $value */
        $value = $this->getAttribute('inventorySourceTypeFilter');

        return $value;
    }

    /**
     * Sets the inventorySourceTypeFilter value.
     *
     * @param TargetInventorySourceTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setInventorySourceTypeFilter(TargetInventorySourceTypeFilter|array|null $value): self
    {
        $this->setAttribute('inventorySourceTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the keywordFilter value.
     *
     * @return TargetKeywordFilter|null
     */
    public function getKeywordFilter(): ?TargetKeywordFilter
    {
        /** @var TargetKeywordFilter|null $value */
        $value = $this->getAttribute('keywordFilter');

        return $value;
    }

    /**
     * Sets the keywordFilter value.
     *
     * @param TargetKeywordFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setKeywordFilter(TargetKeywordFilter|array|null $value): self
    {
        $this->setAttribute('keywordFilter', $value);

        return $this;
    }

    /**
     * Returns the marketplaceScopeFilter value.
     *
     * @return TargetMarketplaceScopeFilter|null
     */
    public function getMarketplaceScopeFilter(): ?TargetMarketplaceScopeFilter
    {
        /** @var TargetMarketplaceScopeFilter|null $value */
        $value = $this->getAttribute('marketplaceScopeFilter');

        return $value;
    }

    /**
     * Sets the marketplaceScopeFilter value.
     *
     * @param TargetMarketplaceScopeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceScopeFilter(TargetMarketplaceScopeFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceScopeFilter', $value);

        return $this;
    }

    /**
     * Returns the matchTypeFilter value.
     *
     * @return TargetMatchTypeFilter|null
     */
    public function getMatchTypeFilter(): ?TargetMatchTypeFilter
    {
        /** @var TargetMatchTypeFilter|null $value */
        $value = $this->getAttribute('matchTypeFilter');

        return $value;
    }

    /**
     * Sets the matchTypeFilter value.
     *
     * @param TargetMatchTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMatchTypeFilter(TargetMatchTypeFilter|array|null $value): self
    {
        $this->setAttribute('matchTypeFilter', $value);

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
     * Returns the nativeLanguageLocaleFilter value.
     *
     * @return TargetLanguageLocaleFilter|null
     */
    public function getNativeLanguageLocaleFilter(): ?TargetLanguageLocaleFilter
    {
        /** @var TargetLanguageLocaleFilter|null $value */
        $value = $this->getAttribute('nativeLanguageLocaleFilter');

        return $value;
    }

    /**
     * Sets the nativeLanguageLocaleFilter value.
     *
     * @param TargetLanguageLocaleFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNativeLanguageLocaleFilter(TargetLanguageLocaleFilter|array|null $value): self
    {
        $this->setAttribute('nativeLanguageLocaleFilter', $value);

        return $this;
    }

    /**
     * Returns the negativeFilter value.
     *
     * @return TargetNegativeFilter|null
     */
    public function getNegativeFilter(): ?TargetNegativeFilter
    {
        /** @var TargetNegativeFilter|null $value */
        $value = $this->getAttribute('negativeFilter');

        return $value;
    }

    /**
     * Sets the negativeFilter value.
     *
     * @param TargetNegativeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNegativeFilter(TargetNegativeFilter|array|null $value): self
    {
        $this->setAttribute('negativeFilter', $value);

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
     * Returns the productIdFilter value.
     *
     * @return TargetProductIdFilter|null
     */
    public function getProductIdFilter(): ?TargetProductIdFilter
    {
        /** @var TargetProductIdFilter|null $value */
        $value = $this->getAttribute('productIdFilter');

        return $value;
    }

    /**
     * Sets the productIdFilter value.
     *
     * @param TargetProductIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setProductIdFilter(TargetProductIdFilter|array|null $value): self
    {
        $this->setAttribute('productIdFilter', $value);

        return $this;
    }

    /**
     * Returns the stateFilter value.
     *
     * @return TargetStateFilter|null
     */
    public function getStateFilter(): ?TargetStateFilter
    {
        /** @var TargetStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param TargetStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(TargetStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }

    /**
     * Returns the targetIdFilter value.
     *
     * @return TargetTargetIdFilter|null
     */
    public function getTargetIdFilter(): ?TargetTargetIdFilter
    {
        /** @var TargetTargetIdFilter|null $value */
        $value = $this->getAttribute('targetIdFilter');

        return $value;
    }

    /**
     * Sets the targetIdFilter value.
     *
     * @param TargetTargetIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetIdFilter(TargetTargetIdFilter|array|null $value): self
    {
        $this->setAttribute('targetIdFilter', $value);

        return $this;
    }

    /**
     * Returns the targetTypeFilter value.
     *
     * @return TargetTargetTypeFilter|null
     */
    public function getTargetTypeFilter(): ?TargetTargetTypeFilter
    {
        /** @var TargetTargetTypeFilter|null $value */
        $value = $this->getAttribute('targetTypeFilter');

        return $value;
    }

    /**
     * Sets the targetTypeFilter value.
     *
     * @param TargetTargetTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetTypeFilter(TargetTargetTypeFilter|array|null $value): self
    {
        $this->setAttribute('targetTypeFilter', $value);

        return $this;
    }
}
