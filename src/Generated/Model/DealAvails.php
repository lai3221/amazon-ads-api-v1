<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealAvails schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealAvails.
 */
final class DealAvails extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealAvails';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => AdProduct::class,
            'required' => false,
            'nullable' => false,
        ],
        'advertisingDealId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'appId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'audienceId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'countryCode' => [
            'type' => 'enum',
            'class' => CountryCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'creativeSize' => [
            'type' => 'model',
            'class' => Size::class,
            'required' => false,
            'nullable' => false,
        ],
        'dealAvailsId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'deviceType' => [
            'type' => 'enum',
            'class' => DeviceType::class,
            'required' => false,
            'nullable' => false,
        ],
        'domainEntry' => [
            'type' => 'model',
            'class' => DomainEntry::class,
            'required' => false,
            'nullable' => false,
        ],
        'eligibleAvails' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'eligibleAvailsTargeting' => [
            'type' => 'model',
            'class' => EligibleAvailsTargeting::class,
            'required' => false,
            'nullable' => false,
        ],
        'groupByAttributes' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => DealAvailsAttributeField::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
        'inventoryType' => [
            'type' => 'enum',
            'class' => InventoryType::class,
            'required' => false,
            'nullable' => false,
        ],
        'supplierSellerId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'totalAvails' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return AdProduct|null
     */
    public function getAdProduct(): ?AdProduct
    {
        /** @var AdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param AdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(AdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns The advertising deal this avails record belongs to..
     *
     * @return string|null
     */
    public function getAdvertisingDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertisingDealId');

        return $value;
    }

    /**
     * Sets The advertising deal this avails record belongs to..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDealId(?string $value): self
    {
        $this->setAttribute('advertisingDealId', $value);

        return $this;
    }

    /**
     * Returns App for this avails slice..
     *
     * @return string|null
     */
    public function getAppId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('appId');

        return $value;
    }

    /**
     * Sets App for this avails slice..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAppId(?string $value): self
    {
        $this->setAttribute('appId', $value);

        return $this;
    }

    /**
     * Returns Audience segment for this avails slice..
     *
     * @return string|null
     */
    public function getAudienceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('audienceId');

        return $value;
    }

    /**
     * Sets Audience segment for this avails slice..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAudienceId(?string $value): self
    {
        $this->setAttribute('audienceId', $value);

        return $this;
    }

    /**
     * Returns the countryCode value.
     *
     * @return CountryCode|null
     */
    public function getCountryCode(): ?CountryCode
    {
        /** @var CountryCode|null $value */
        $value = $this->getAttribute('countryCode');

        return $value;
    }

    /**
     * Sets the countryCode value.
     *
     * @param CountryCode|string|null $value New property value.
     * @return $this
     */
    public function setCountryCode(CountryCode|string|null $value): self
    {
        $this->setAttribute('countryCode', $value);

        return $this;
    }

    /**
     * Returns the creativeSize value.
     *
     * @return Size|null
     */
    public function getCreativeSize(): ?Size
    {
        /** @var Size|null $value */
        $value = $this->getAttribute('creativeSize');

        return $value;
    }

    /**
     * Sets the creativeSize value.
     *
     * @param Size|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreativeSize(Size|array|null $value): self
    {
        $this->setAttribute('creativeSize', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for the deal avails record..
     *
     * @return string|null
     */
    public function getDealAvailsId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('dealAvailsId');

        return $value;
    }

    /**
     * Sets A unique identifier for the deal avails record..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDealAvailsId(?string $value): self
    {
        $this->setAttribute('dealAvailsId', $value);

        return $this;
    }

    /**
     * Returns the deviceType value.
     *
     * @return DeviceType|null
     */
    public function getDeviceType(): ?DeviceType
    {
        /** @var DeviceType|null $value */
        $value = $this->getAttribute('deviceType');

        return $value;
    }

    /**
     * Sets the deviceType value.
     *
     * @param DeviceType|string|null $value New property value.
     * @return $this
     */
    public function setDeviceType(DeviceType|string|null $value): self
    {
        $this->setAttribute('deviceType', $value);

        return $this;
    }

    /**
     * Returns the domainEntry value.
     *
     * @return DomainEntry|null
     */
    public function getDomainEntry(): ?DomainEntry
    {
        /** @var DomainEntry|null $value */
        $value = $this->getAttribute('domainEntry');

        return $value;
    }

    /**
     * Sets the domainEntry value.
     *
     * @param DomainEntry|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDomainEntry(DomainEntry|array|null $value): self
    {
        $this->setAttribute('domainEntry', $value);

        return $this;
    }

    /**
     * Returns Bid opportunities over the last 7 days eligible for bidding (bids and no-bids, excluding punts). Filtered by the EligibleAvailsTargeting when provided..
     *
     * @return int|null
     */
    public function getEligibleAvails(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('eligibleAvails');

        return $value;
    }

    /**
     * Sets Bid opportunities over the last 7 days eligible for bidding (bids and no-bids, excluding punts). Filtered by the EligibleAvailsTargeting when provided..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setEligibleAvails(?int $value): self
    {
        $this->setAttribute('eligibleAvails', $value);

        return $this;
    }

    /**
     * Returns the eligibleAvailsTargeting value.
     *
     * @return EligibleAvailsTargeting|null
     */
    public function getEligibleAvailsTargeting(): ?EligibleAvailsTargeting
    {
        /** @var EligibleAvailsTargeting|null $value */
        $value = $this->getAttribute('eligibleAvailsTargeting');

        return $value;
    }

    /**
     * Sets the eligibleAvailsTargeting value.
     *
     * @param EligibleAvailsTargeting|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEligibleAvailsTargeting(EligibleAvailsTargeting|array|null $value): self
    {
        $this->setAttribute('eligibleAvailsTargeting', $value);

        return $this;
    }

    /**
     * Returns Attributes to break results down by. When empty or omitted, results are aggregated to one entry per deal..
     *
     * @return list<DealAvailsAttributeField>|null
     */
    public function getGroupByAttributes(): ?array
    {
        /** @var list<DealAvailsAttributeField>|null $value */
        $value = $this->getAttribute('groupByAttributes');

        return $value;
    }

    /**
     * Sets Attributes to break results down by. When empty or omitted, results are aggregated to one entry per deal..
     *
     * @param list<DealAvailsAttributeField>|null $value New property value.
     * @return $this
     */
    public function setGroupByAttributes(?array $value): self
    {
        $this->setAttribute('groupByAttributes', $value);

        return $this;
    }

    /**
     * Returns the inventoryType value.
     *
     * @return InventoryType|null
     */
    public function getInventoryType(): ?InventoryType
    {
        /** @var InventoryType|null $value */
        $value = $this->getAttribute('inventoryType');

        return $value;
    }

    /**
     * Sets the inventoryType value.
     *
     * @param InventoryType|string|null $value New property value.
     * @return $this
     */
    public function setInventoryType(InventoryType|string|null $value): self
    {
        $this->setAttribute('inventoryType', $value);

        return $this;
    }

    /**
     * Returns The supplier seller associated with this avails record..
     *
     * @return string|null
     */
    public function getSupplierSellerId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('supplierSellerId');

        return $value;
    }

    /**
     * Sets The supplier seller associated with this avails record..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSupplierSellerId(?string $value): self
    {
        $this->setAttribute('supplierSellerId', $value);

        return $this;
    }

    /**
     * Returns Total bid opportunities over the last 7 days for this deal, including bids, no-bids, and punts. Not filtered by the EligibleAvailsTargeting..
     *
     * @return int|null
     */
    public function getTotalAvails(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('totalAvails');

        return $value;
    }

    /**
     * Sets Total bid opportunities over the last 7 days for this deal, including bids, no-bids, and punts. Not filtered by the EligibleAvailsTargeting..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setTotalAvails(?int $value): self
    {
        $this->setAttribute('totalAvails', $value);

        return $this;
    }
}
