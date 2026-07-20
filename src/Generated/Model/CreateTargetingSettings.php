<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTargetingSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTargetingSettings.
 */
final class CreateTargetingSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTargetingSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'amazonViewability' => [
            'type' => 'model',
            'class' => CreateAmazonViewability::class,
            'required' => true,
            'nullable' => false,
        ],
        'automatedTargetingTactic' => [
            'type' => 'enum',
            'class' => AutomatedTargetingTactic::class,
            'required' => false,
            'nullable' => false,
        ],
        'defaultAudienceTargetingMatchType' => [
            'type' => 'enum',
            'class' => DefaultAudienceTargetingMatchType::class,
            'required' => false,
            'nullable' => false,
        ],
        'enableLanguageTargeting' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'tacticsConvertersExclusionType' => [
            'type' => 'enum',
            'class' => TacticsConvertersExclusionType::class,
            'required' => false,
            'nullable' => false,
        ],
        'targetedPGDealId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'timeZoneType' => [
            'type' => 'enum',
            'class' => TimeZoneType::class,
            'required' => true,
            'nullable' => false,
        ],
        'userLocationSignal' => [
            'type' => 'enum',
            'class' => UserLocationSignal::class,
            'required' => true,
            'nullable' => false,
        ],
        'videoCompletionTier' => [
            'type' => 'enum',
            'class' => VideoCompletionTier::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the amazonViewability value.
     *
     * @return CreateAmazonViewability|null
     */
    public function getAmazonViewability(): ?CreateAmazonViewability
    {
        /** @var CreateAmazonViewability|null $value */
        $value = $this->getAttribute('amazonViewability');

        return $value;
    }

    /**
     * Sets the amazonViewability value.
     *
     * @param CreateAmazonViewability|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAmazonViewability(CreateAmazonViewability|array|null $value): self
    {
        $this->setAttribute('amazonViewability', $value);

        return $this;
    }

    /**
     * Returns the automatedTargetingTactic value.
     *
     * @return AutomatedTargetingTactic|null
     */
    public function getAutomatedTargetingTactic(): ?AutomatedTargetingTactic
    {
        /** @var AutomatedTargetingTactic|null $value */
        $value = $this->getAttribute('automatedTargetingTactic');

        return $value;
    }

    /**
     * Sets the automatedTargetingTactic value.
     *
     * @param AutomatedTargetingTactic|string|null $value New property value.
     * @return $this
     */
    public function setAutomatedTargetingTactic(AutomatedTargetingTactic|string|null $value): self
    {
        $this->setAttribute('automatedTargetingTactic', $value);

        return $this;
    }

    /**
     * Returns the defaultAudienceTargetingMatchType value.
     *
     * @return DefaultAudienceTargetingMatchType|null
     */
    public function getDefaultAudienceTargetingMatchType(): ?DefaultAudienceTargetingMatchType
    {
        /** @var DefaultAudienceTargetingMatchType|null $value */
        $value = $this->getAttribute('defaultAudienceTargetingMatchType');

        return $value;
    }

    /**
     * Sets the defaultAudienceTargetingMatchType value.
     *
     * @param DefaultAudienceTargetingMatchType|string|null $value New property value.
     * @return $this
     */
    public function setDefaultAudienceTargetingMatchType(DefaultAudienceTargetingMatchType|string|null $value): self
    {
        $this->setAttribute('defaultAudienceTargetingMatchType', $value);

        return $this;
    }

    /**
     * Returns If set to true, creatives will only target supply where the content language matches the creative language..
     *
     * @return bool|null
     */
    public function getEnableLanguageTargeting(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('enableLanguageTargeting');

        return $value;
    }

    /**
     * Sets If set to true, creatives will only target supply where the content language matches the creative language..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setEnableLanguageTargeting(?bool $value): self
    {
        $this->setAttribute('enableLanguageTargeting', $value);

        return $this;
    }

    /**
     * Returns the tacticsConvertersExclusionType value.
     *
     * @return TacticsConvertersExclusionType|null
     */
    public function getTacticsConvertersExclusionType(): ?TacticsConvertersExclusionType
    {
        /** @var TacticsConvertersExclusionType|null $value */
        $value = $this->getAttribute('tacticsConvertersExclusionType');

        return $value;
    }

    /**
     * Sets the tacticsConvertersExclusionType value.
     *
     * @param TacticsConvertersExclusionType|string|null $value New property value.
     * @return $this
     */
    public function setTacticsConvertersExclusionType(TacticsConvertersExclusionType|string|null $value): self
    {
        $this->setAttribute('tacticsConvertersExclusionType', $value);

        return $this;
    }

    /**
     * Returns DealId to be targeted by the Ad Group being created. If you are creating an ad group targeting a programmatic guaranteed deal, the deal can be provided here..
     *
     * @return string|null
     */
    public function getTargetedPGDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('targetedPGDealId');

        return $value;
    }

    /**
     * Sets DealId to be targeted by the Ad Group being created. If you are creating an ad group targeting a programmatic guaranteed deal, the deal can be provided here..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTargetedPGDealId(?string $value): self
    {
        $this->setAttribute('targetedPGDealId', $value);

        return $this;
    }

    /**
     * Returns the timeZoneType value.
     *
     * @return TimeZoneType|null
     */
    public function getTimeZoneType(): ?TimeZoneType
    {
        /** @var TimeZoneType|null $value */
        $value = $this->getAttribute('timeZoneType');

        return $value;
    }

    /**
     * Sets the timeZoneType value.
     *
     * @param TimeZoneType|string|null $value New property value.
     * @return $this
     */
    public function setTimeZoneType(TimeZoneType|string|null $value): self
    {
        $this->setAttribute('timeZoneType', $value);

        return $this;
    }

    /**
     * Returns the userLocationSignal value.
     *
     * @return UserLocationSignal|null
     */
    public function getUserLocationSignal(): ?UserLocationSignal
    {
        /** @var UserLocationSignal|null $value */
        $value = $this->getAttribute('userLocationSignal');

        return $value;
    }

    /**
     * Sets the userLocationSignal value.
     *
     * @param UserLocationSignal|string|null $value New property value.
     * @return $this
     */
    public function setUserLocationSignal(UserLocationSignal|string|null $value): self
    {
        $this->setAttribute('userLocationSignal', $value);

        return $this;
    }

    /**
     * Returns the videoCompletionTier value.
     *
     * @return VideoCompletionTier|null
     */
    public function getVideoCompletionTier(): ?VideoCompletionTier
    {
        /** @var VideoCompletionTier|null $value */
        $value = $this->getAttribute('videoCompletionTier');

        return $value;
    }

    /**
     * Sets the videoCompletionTier value.
     *
     * @param VideoCompletionTier|string|null $value New property value.
     * @return $this
     */
    public function setVideoCompletionTier(VideoCompletionTier|string|null $value): self
    {
        $this->setAttribute('videoCompletionTier', $value);

        return $this;
    }
}
