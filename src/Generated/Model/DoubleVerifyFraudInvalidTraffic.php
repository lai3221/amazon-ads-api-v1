<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DoubleVerifyFraudInvalidTraffic schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DoubleVerifyFraudInvalidTraffic.
 */
final class DoubleVerifyFraudInvalidTraffic extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DoubleVerifyFraudInvalidTraffic';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'blockAppAndSites' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'excludeAppsAndSites' => [
            'type' => 'enum',
            'class' => ExcludeAppsAndSitesType::class,
            'required' => false,
            'nullable' => false,
        ],
        'excludeImpressions' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Set to true to block applications and sites with insufficient historical fraud and invalid traffic statistics. This will not be applicable if ALLOW ALL is chosen..
     *
     * @return bool|null
     */
    public function getBlockAppAndSites(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('blockAppAndSites');

        return $value;
    }

    /**
     * Sets Set to true to block applications and sites with insufficient historical fraud and invalid traffic statistics. This will not be applicable if ALLOW ALL is chosen..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setBlockAppAndSites(?bool $value): self
    {
        $this->setAttribute('blockAppAndSites', $value);

        return $this;
    }

    /**
     * Returns the excludeAppsAndSites value.
     *
     * @return ExcludeAppsAndSitesType|null
     */
    public function getExcludeAppsAndSites(): ?ExcludeAppsAndSitesType
    {
        /** @var ExcludeAppsAndSitesType|null $value */
        $value = $this->getAttribute('excludeAppsAndSites');

        return $value;
    }

    /**
     * Sets the excludeAppsAndSites value.
     *
     * @param ExcludeAppsAndSitesType|string|null $value New property value.
     * @return $this
     */
    public function setExcludeAppsAndSites(ExcludeAppsAndSitesType|string|null $value): self
    {
        $this->setAttribute('excludeAppsAndSites', $value);

        return $this;
    }

    /**
     * Returns Set to true to exclude impressions delivered to devices identified to be fraudulent or invalid..
     *
     * @return bool|null
     */
    public function getExcludeImpressions(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeImpressions');

        return $value;
    }

    /**
     * Sets Set to true to exclude impressions delivered to devices identified to be fraudulent or invalid..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeImpressions(?bool $value): self
    {
        $this->setAttribute('excludeImpressions', $value);

        return $this;
    }
}
