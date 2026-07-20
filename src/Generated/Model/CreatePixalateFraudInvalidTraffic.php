<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreatePixalateFraudInvalidTraffic schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreatePixalateFraudInvalidTraffic.
 */
final class CreatePixalateFraudInvalidTraffic extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreatePixalateFraudInvalidTraffic';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'excludeAppsAndDomains' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'excludeIpAddressAndUserAgents' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'excludeOttAndMobileDevices' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'excludeRemovedAppsFromAppStores' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Set to true to exclude traffic from Apps and Domains identified to be fraudulent or invalid..
     *
     * @return bool|null
     */
    public function getExcludeAppsAndDomains(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeAppsAndDomains');

        return $value;
    }

    /**
     * Sets Set to true to exclude traffic from Apps and Domains identified to be fraudulent or invalid..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeAppsAndDomains(?bool $value): self
    {
        $this->setAttribute('excludeAppsAndDomains', $value);

        return $this;
    }

    /**
     * Returns Set to true to exclude traffic from IPV4 and IPV6 addresses and user agents identified to be fraudulent or invalid..
     *
     * @return bool|null
     */
    public function getExcludeIpAddressAndUserAgents(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeIpAddressAndUserAgents');

        return $value;
    }

    /**
     * Sets Set to true to exclude traffic from IPV4 and IPV6 addresses and user agents identified to be fraudulent or invalid..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeIpAddressAndUserAgents(?bool $value): self
    {
        $this->setAttribute('excludeIpAddressAndUserAgents', $value);

        return $this;
    }

    /**
     * Returns Set to true to exclude traffic from OTT and Mobile devices identified to be fraudulent or invalid..
     *
     * @return bool|null
     */
    public function getExcludeOttAndMobileDevices(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeOttAndMobileDevices');

        return $value;
    }

    /**
     * Sets Set to true to exclude traffic from OTT and Mobile devices identified to be fraudulent or invalid..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeOttAndMobileDevices(?bool $value): self
    {
        $this->setAttribute('excludeOttAndMobileDevices', $value);

        return $this;
    }

    /**
     * Returns Set to true to exlude traffic from Apps that have been removed from the google play and apple app stores in the last 6 months..
     *
     * @return bool|null
     */
    public function getExcludeRemovedAppsFromAppStores(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeRemovedAppsFromAppStores');

        return $value;
    }

    /**
     * Sets Set to true to exlude traffic from Apps that have been removed from the google play and apple app stores in the last 6 months..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeRemovedAppsFromAppStores(?bool $value): self
    {
        $this->setAttribute('excludeRemovedAppsFromAppStores', $value);

        return $this;
    }
}
