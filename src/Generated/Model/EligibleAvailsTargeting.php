<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targeting that filters eligible avails. All targeting dimensions are AND'd together, except app and domain entries (including list variants) which are OR'd together since a bid contains either an app or a domain, never both. Within a dimension, entries are.
 *
 * @generated from Amazon Ads API v1 schema EligibleAvailsTargeting.
 */
final class EligibleAvailsTargeting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'EligibleAvailsTargeting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'appListTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AppListTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'appTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AppTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'audienceTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AudienceTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'creativeSizeTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreativeSizeTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'deviceTypeTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DeviceTypeTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'domainListTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DomainListTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'domainTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DomainTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'inventoryTypeTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => InventoryTypeTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'locationTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LocationTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'supplierSellerTargetingEntries' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => SupplierSellerTargetingEntry::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns App list targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @return list<AppListTargetingEntry>|null
     */
    public function getAppListTargetingEntries(): ?array
    {
        /** @var list<AppListTargetingEntry>|null $value */
        $value = $this->getAttribute('appListTargetingEntries');

        return $value;
    }

    /**
     * Sets App list targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @param list<AppListTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setAppListTargetingEntries(?array $value): self
    {
        $this->setAttribute('appListTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns App targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @return list<AppTargetingEntry>|null
     */
    public function getAppTargetingEntries(): ?array
    {
        /** @var list<AppTargetingEntry>|null $value */
        $value = $this->getAttribute('appTargetingEntries');

        return $value;
    }

    /**
     * Sets App targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @param list<AppTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setAppTargetingEntries(?array $value): self
    {
        $this->setAttribute('appTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Audience targeting entries. Entries are grouped by groupId. Within a group, audiences are OR'd (union). Across included groups, groups are AND'd (intersection)..
     *
     * @return list<AudienceTargetingEntry>|null
     */
    public function getAudienceTargetingEntries(): ?array
    {
        /** @var list<AudienceTargetingEntry>|null $value */
        $value = $this->getAttribute('audienceTargetingEntries');

        return $value;
    }

    /**
     * Sets Audience targeting entries. Entries are grouped by groupId. Within a group, audiences are OR'd (union). Across included groups, groups are AND'd (intersection)..
     *
     * @param list<AudienceTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setAudienceTargetingEntries(?array $value): self
    {
        $this->setAttribute('audienceTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Creative size targeting entries..
     *
     * @return list<CreativeSizeTargetingEntry>|null
     */
    public function getCreativeSizeTargetingEntries(): ?array
    {
        /** @var list<CreativeSizeTargetingEntry>|null $value */
        $value = $this->getAttribute('creativeSizeTargetingEntries');

        return $value;
    }

    /**
     * Sets Creative size targeting entries..
     *
     * @param list<CreativeSizeTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setCreativeSizeTargetingEntries(?array $value): self
    {
        $this->setAttribute('creativeSizeTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Device type targeting entries..
     *
     * @return list<DeviceTypeTargetingEntry>|null
     */
    public function getDeviceTypeTargetingEntries(): ?array
    {
        /** @var list<DeviceTypeTargetingEntry>|null $value */
        $value = $this->getAttribute('deviceTypeTargetingEntries');

        return $value;
    }

    /**
     * Sets Device type targeting entries..
     *
     * @param list<DeviceTypeTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setDeviceTypeTargetingEntries(?array $value): self
    {
        $this->setAttribute('deviceTypeTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Domain list targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @return list<DomainListTargetingEntry>|null
     */
    public function getDomainListTargetingEntries(): ?array
    {
        /** @var list<DomainListTargetingEntry>|null $value */
        $value = $this->getAttribute('domainListTargetingEntries');

        return $value;
    }

    /**
     * Sets Domain list targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @param list<DomainListTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setDomainListTargetingEntries(?array $value): self
    {
        $this->setAttribute('domainListTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Domain targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @return list<DomainTargetingEntry>|null
     */
    public function getDomainTargetingEntries(): ?array
    {
        /** @var list<DomainTargetingEntry>|null $value */
        $value = $this->getAttribute('domainTargetingEntries');

        return $value;
    }

    /**
     * Sets Domain targeting entries. App, domain, app list, and domain list targeting entries are always combined with OR logic because a bid contains either an app or a domain, never both..
     *
     * @param list<DomainTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setDomainTargetingEntries(?array $value): self
    {
        $this->setAttribute('domainTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Inventory type targeting entries..
     *
     * @return list<InventoryTypeTargetingEntry>|null
     */
    public function getInventoryTypeTargetingEntries(): ?array
    {
        /** @var list<InventoryTypeTargetingEntry>|null $value */
        $value = $this->getAttribute('inventoryTypeTargetingEntries');

        return $value;
    }

    /**
     * Sets Inventory type targeting entries..
     *
     * @param list<InventoryTypeTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setInventoryTypeTargetingEntries(?array $value): self
    {
        $this->setAttribute('inventoryTypeTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Location targeting entries..
     *
     * @return list<LocationTargetingEntry>|null
     */
    public function getLocationTargetingEntries(): ?array
    {
        /** @var list<LocationTargetingEntry>|null $value */
        $value = $this->getAttribute('locationTargetingEntries');

        return $value;
    }

    /**
     * Sets Location targeting entries..
     *
     * @param list<LocationTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setLocationTargetingEntries(?array $value): self
    {
        $this->setAttribute('locationTargetingEntries', $value);

        return $this;
    }

    /**
     * Returns Supplier seller targeting entries..
     *
     * @return list<SupplierSellerTargetingEntry>|null
     */
    public function getSupplierSellerTargetingEntries(): ?array
    {
        /** @var list<SupplierSellerTargetingEntry>|null $value */
        $value = $this->getAttribute('supplierSellerTargetingEntries');

        return $value;
    }

    /**
     * Sets Supplier seller targeting entries..
     *
     * @param list<SupplierSellerTargetingEntry>|null $value New property value.
     * @return $this
     */
    public function setSupplierSellerTargetingEntries(?array $value): self
    {
        $this->setAttribute('supplierSellerTargetingEntries', $value);

        return $this;
    }
}
