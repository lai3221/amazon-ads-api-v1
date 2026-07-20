<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Event schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Event.
 */
final class Event extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Event';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'amazonAdEventKey' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'arefMeasurementTokens' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'consent' => [
            'type' => 'model',
            'class' => Consent::class,
            'required' => false,
            'nullable' => false,
        ],
        'countryCode' => [
            'type' => 'enum',
            'class' => CountryCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'currencyCode' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'customData' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CustomData::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 13,
        ],
        'dataProcessingOptions' => [
            'type' => 'model',
            'class' => DataProcessingOptions::class,
            'required' => false,
            'nullable' => false,
        ],
        'deviceInfo' => [
            'type' => 'model',
            'class' => DeviceInfo::class,
            'required' => false,
            'nullable' => false,
        ],
        'eventDescription' => [
            'type' => 'model',
            'class' => EventDescription::class,
            'required' => true,
            'nullable' => false,
        ],
        'eventId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'eventTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'matchKeys' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => MatchKey::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 15,
        ],
        'partner' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'unitsSold' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
        ],
        'value' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Amazon Traffic identifier for post attributed events (if applicable)..
     *
     * @return string|null
     */
    public function getAmazonAdEventKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('amazonAdEventKey');

        return $value;
    }

    /**
     * Sets Amazon Traffic identifier for post attributed events (if applicable)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAmazonAdEventKey(?string $value): self
    {
        $this->setAttribute('amazonAdEventKey', $value);

        return $this;
    }

    /**
     * Returns Pipe-separated measurement token pairs extracted from the aref parameter of the ad click URL. Each pair is formatted as..
     *
     * @return string|null
     */
    public function getArefMeasurementTokens(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('arefMeasurementTokens');

        return $value;
    }

    /**
     * Sets Pipe-separated measurement token pairs extracted from the aref parameter of the ad click URL. Each pair is formatted as..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setArefMeasurementTokens(?string $value): self
    {
        $this->setAttribute('arefMeasurementTokens', $value);

        return $this;
    }

    /**
     * Returns the consent value.
     *
     * @return Consent|null
     */
    public function getConsent(): ?Consent
    {
        /** @var Consent|null $value */
        $value = $this->getAttribute('consent');

        return $value;
    }

    /**
     * Sets the consent value.
     *
     * @param Consent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setConsent(Consent|array|null $value): self
    {
        $this->setAttribute('consent', $value);

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
     * Returns Custom data associated with the event..
     *
     * @return list<CustomData>|null
     */
    public function getCustomData(): ?array
    {
        /** @var list<CustomData>|null $value */
        $value = $this->getAttribute('customData');

        return $value;
    }

    /**
     * Sets Custom data associated with the event..
     *
     * @param list<CustomData>|null $value New property value.
     * @return $this
     */
    public function setCustomData(?array $value): self
    {
        $this->setAttribute('customData', $value);

        return $this;
    }

    /**
     * Returns the dataProcessingOptions value.
     *
     * @return DataProcessingOptions|null
     */
    public function getDataProcessingOptions(): ?DataProcessingOptions
    {
        /** @var DataProcessingOptions|null $value */
        $value = $this->getAttribute('dataProcessingOptions');

        return $value;
    }

    /**
     * Sets the dataProcessingOptions value.
     *
     * @param DataProcessingOptions|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDataProcessingOptions(DataProcessingOptions|array|null $value): self
    {
        $this->setAttribute('dataProcessingOptions', $value);

        return $this;
    }

    /**
     * Returns the deviceInfo value.
     *
     * @return DeviceInfo|null
     */
    public function getDeviceInfo(): ?DeviceInfo
    {
        /** @var DeviceInfo|null $value */
        $value = $this->getAttribute('deviceInfo');

        return $value;
    }

    /**
     * Sets the deviceInfo value.
     *
     * @param DeviceInfo|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDeviceInfo(DeviceInfo|array|null $value): self
    {
        $this->setAttribute('deviceInfo', $value);

        return $this;
    }

    /**
     * Returns the eventDescription value.
     *
     * @return EventDescription|null
     */
    public function getEventDescription(): ?EventDescription
    {
        /** @var EventDescription|null $value */
        $value = $this->getAttribute('eventDescription');

        return $value;
    }

    /**
     * Sets the eventDescription value.
     *
     * @param EventDescription|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setEventDescription(EventDescription|array|null $value): self
    {
        $this->setAttribute('eventDescription', $value);

        return $this;
    }

    /**
     * Returns The client specified id for the event. For events with the same eventId only the latest event will be kept..
     *
     * @return string|null
     */
    public function getEventId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('eventId');

        return $value;
    }

    /**
     * Sets The client specified id for the event. For events with the same eventId only the latest event will be kept..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEventId(?string $value): self
    {
        $this->setAttribute('eventId', $value);

        return $this;
    }

    /**
     * Returns The reported timestamp of when the event occurred..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEventTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('eventTime');

        return $value;
    }

    /**
     * Sets The reported timestamp of when the event occurred..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEventTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('eventTime', $value);

        return $this;
    }

    /**
     * Returns Array representing the user and device identifier types/values to be used for attribution to traffic events. Match key value must be normalized and hashed, except for MAID, RAMP ID, MATCH ID, REAL ID, MERKLE ID, KANTAR ID, and FIP. ADID, IDFA, or FIREADID c..
     *
     * @return list<MatchKey>|null
     */
    public function getMatchKeys(): ?array
    {
        /** @var list<MatchKey>|null $value */
        $value = $this->getAttribute('matchKeys');

        return $value;
    }

    /**
     * Sets Array representing the user and device identifier types/values to be used for attribution to traffic events. Match key value must be normalized and hashed, except for MAID, RAMP ID, MATCH ID, REAL ID, MERKLE ID, KANTAR ID, and FIP. ADID, IDFA, or FIREADID c..
     *
     * @param list<MatchKey>|null $value New property value.
     * @return $this
     */
    public function setMatchKeys(?array $value): self
    {
        $this->setAttribute('matchKeys', $value);

        return $this;
    }

    /**
     * Returns The name of the third-party service used to deliver the conversions (if applicable)..
     *
     * @return string|null
     */
    public function getPartner(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('partner');

        return $value;
    }

    /**
     * Sets The name of the third-party service used to deliver the conversions (if applicable)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPartner(?string $value): self
    {
        $this->setAttribute('partner', $value);

        return $this;
    }

    /**
     * Returns The number of items purchased. Only applicable for OFF AMAZON PURCHASES event type. If not provided on the event, a default of 1 will be applied..
     *
     * @return int|null
     */
    public function getUnitsSold(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('unitsSold');

        return $value;
    }

    /**
     * Sets The number of items purchased. Only applicable for OFF AMAZON PURCHASES event type. If not provided on the event, a default of 1 will be applied..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setUnitsSold(?int $value): self
    {
        $this->setAttribute('unitsSold', $value);

        return $this;
    }

    /**
     * Returns Represents value of the event. For OFF AMAZON PURCHASES conversionType, represents monetary value (min 0, max 2 decimals). For other conversionTypes, represents non-monetary value on your chosen scale (can be negative, max 2 decimals). Uses template default..
     *
     * @return int|float|null
     */
    public function getValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('value');

        return $value;
    }

    /**
     * Sets Represents value of the event. For OFF AMAZON PURCHASES conversionType, represents monetary value (min 0, max 2 decimals). For other conversionTypes, represents non-monetary value on your chosen scale (can be negative, max 2 decimals). Uses template default..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setValue(int|float|null $value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
