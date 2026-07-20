<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A location targeting entry. Currently only country-level targeting is supported. All entries must share the same negative value.
 *
 * @generated from Amazon Ads API v1 schema LocationTargetingEntry.
 */
final class LocationTargetingEntry extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationTargetingEntry';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'countryCode' => [
            'type' => 'enum',
            'class' => CountryCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'groupId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'negative' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

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
     * Returns Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('groupId');

        return $value;
    }

    /**
     * Sets Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGroupId(?string $value): self
    {
        $this->setAttribute('groupId', $value);

        return $this;
    }

    /**
     * Returns When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

        return $this;
    }
}
