<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserAccountUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserAccountUpdate.
 */
final class AdvertiserAccountUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserAccountUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserAccountId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'businessDetails' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateBusinessDetail::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'displayName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'industryVertical' => [
            'type' => 'enum',
            'class' => IndustryVertical::class,
            'required' => false,
            'nullable' => false,
        ],
        'isGlobalAccount' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'isTestAccount' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'managerAccountId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'sellingAccountLinkRequests' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateSellingAccountLinkRequest::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1,
        ],
        'timeZoneIana' => [
            'type' => 'enum',
            'class' => TimeZoneIana::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The unique identifier for the advertiser account..
     *
     * @return string|null
     */
    public function getAdvertiserAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertiserAccountId');

        return $value;
    }

    /**
     * Sets The unique identifier for the advertiser account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccountId(?string $value): self
    {
        $this->setAttribute('advertiserAccountId', $value);

        return $this;
    }

    /**
     * Returns The business details for an advertising account, containing either an address token for sellingAccount, or an address object if the sellingAccount lacks a valid address..
     *
     * @return list<CreateBusinessDetail>|null
     */
    public function getBusinessDetails(): ?array
    {
        /** @var list<CreateBusinessDetail>|null $value */
        $value = $this->getAttribute('businessDetails');

        return $value;
    }

    /**
     * Sets The business details for an advertising account, containing either an address token for sellingAccount, or an address object if the sellingAccount lacks a valid address..
     *
     * @param list<CreateBusinessDetail>|null $value New property value.
     * @return $this
     */
    public function setBusinessDetails(?array $value): self
    {
        $this->setAttribute('businessDetails', $value);

        return $this;
    }

    /**
     * Returns the currencyCode value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyCode');

        return $value;
    }

    /**
     * Sets the currencyCode value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyCode(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyCode', $value);

        return $this;
    }

    /**
     * Returns Display name for the advertiser account..
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('displayName');

        return $value;
    }

    /**
     * Sets Display name for the advertiser account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDisplayName(?string $value): self
    {
        $this->setAttribute('displayName', $value);

        return $this;
    }

    /**
     * Returns the industryVertical value.
     *
     * @return IndustryVertical|null
     */
    public function getIndustryVertical(): ?IndustryVertical
    {
        /** @var IndustryVertical|null $value */
        $value = $this->getAttribute('industryVertical');

        return $value;
    }

    /**
     * Sets the industryVertical value.
     *
     * @param IndustryVertical|string|null $value New property value.
     * @return $this
     */
    public function setIndustryVertical(IndustryVertical|string|null $value): self
    {
        $this->setAttribute('industryVertical', $value);

        return $this;
    }

    /**
     * Returns Indicates whether the advertising account is global or not..
     *
     * @return bool|null
     */
    public function getIsGlobalAccount(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isGlobalAccount');

        return $value;
    }

    /**
     * Sets Indicates whether the advertising account is global or not..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsGlobalAccount(?bool $value): self
    {
        $this->setAttribute('isGlobalAccount', $value);

        return $this;
    }

    /**
     * Returns Indicates whether the advertising account is a test account or not..
     *
     * @return bool|null
     */
    public function getIsTestAccount(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isTestAccount');

        return $value;
    }

    /**
     * Sets Indicates whether the advertising account is a test account or not..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsTestAccount(?bool $value): self
    {
        $this->setAttribute('isTestAccount', $value);

        return $this;
    }

    /**
     * Returns Manager Account ID to link to the advertiser account. Required for ADSP-enabled accounts. Without this parameter, accounts will only be enabled for Sponsored Ads..
     *
     * @return string|null
     */
    public function getManagerAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('managerAccountId');

        return $value;
    }

    /**
     * Sets Manager Account ID to link to the advertiser account. Required for ADSP-enabled accounts. Without this parameter, accounts will only be enabled for Sponsored Ads..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setManagerAccountId(?string $value): self
    {
        $this->setAttribute('managerAccountId', $value);

        return $this;
    }

    /**
     * Returns The selling account link requests for an advertiser account, containing details for linking..
     *
     * @return list<CreateSellingAccountLinkRequest>|null
     */
    public function getSellingAccountLinkRequests(): ?array
    {
        /** @var list<CreateSellingAccountLinkRequest>|null $value */
        $value = $this->getAttribute('sellingAccountLinkRequests');

        return $value;
    }

    /**
     * Sets The selling account link requests for an advertiser account, containing details for linking..
     *
     * @param list<CreateSellingAccountLinkRequest>|null $value New property value.
     * @return $this
     */
    public function setSellingAccountLinkRequests(?array $value): self
    {
        $this->setAttribute('sellingAccountLinkRequests', $value);

        return $this;
    }

    /**
     * Returns the timeZoneIana value.
     *
     * @return TimeZoneIana|null
     */
    public function getTimeZoneIana(): ?TimeZoneIana
    {
        /** @var TimeZoneIana|null $value */
        $value = $this->getAttribute('timeZoneIana');

        return $value;
    }

    /**
     * Sets the timeZoneIana value.
     *
     * @param TimeZoneIana|string|null $value New property value.
     * @return $this
     */
    public function setTimeZoneIana(TimeZoneIana|string|null $value): self
    {
        $this->setAttribute('timeZoneIana', $value);

        return $this;
    }
}
