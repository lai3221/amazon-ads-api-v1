<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the IntegralAdScienceBrandSafety schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema IntegralAdScienceBrandSafety.
 */
final class IntegralAdScienceBrandSafety extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IntegralAdScienceBrandSafety';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'excludeContent' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyAdult' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyAlcohol' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyGambling' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyHateSpeech' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyIllegalDownloads' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyIllegalDrugs' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyOffensiveLanguage' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
        'iasBrandSafetyViolence' => [
            'type' => 'enum',
            'class' => IASBrandSafetyLevelType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Set to true to exclude content that Integral Ad Science is not able to rate..
     *
     * @return bool|null
     */
    public function getExcludeContent(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('excludeContent');

        return $value;
    }

    /**
     * Sets Set to true to exclude content that Integral Ad Science is not able to rate..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setExcludeContent(?bool $value): self
    {
        $this->setAttribute('excludeContent', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyAdult value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyAdult(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyAdult');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyAdult value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyAdult(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyAdult', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyAlcohol value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyAlcohol(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyAlcohol');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyAlcohol value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyAlcohol(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyAlcohol', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyGambling value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyGambling(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyGambling');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyGambling value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyGambling(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyGambling', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyHateSpeech value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyHateSpeech(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyHateSpeech');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyHateSpeech value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyHateSpeech(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyHateSpeech', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyIllegalDownloads value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyIllegalDownloads(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyIllegalDownloads');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyIllegalDownloads value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyIllegalDownloads(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyIllegalDownloads', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyIllegalDrugs value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyIllegalDrugs(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyIllegalDrugs');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyIllegalDrugs value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyIllegalDrugs(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyIllegalDrugs', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyOffensiveLanguage value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyOffensiveLanguage(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyOffensiveLanguage');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyOffensiveLanguage value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyOffensiveLanguage(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyOffensiveLanguage', $value);

        return $this;
    }

    /**
     * Returns the iasBrandSafetyViolence value.
     *
     * @return IASBrandSafetyLevelType|null
     */
    public function getIasBrandSafetyViolence(): ?IASBrandSafetyLevelType
    {
        /** @var IASBrandSafetyLevelType|null $value */
        $value = $this->getAttribute('iasBrandSafetyViolence');

        return $value;
    }

    /**
     * Sets the iasBrandSafetyViolence value.
     *
     * @param IASBrandSafetyLevelType|string|null $value New property value.
     * @return $this
     */
    public function setIasBrandSafetyViolence(IASBrandSafetyLevelType|string|null $value): self
    {
        $this->setAttribute('iasBrandSafetyViolence', $value);

        return $this;
    }
}
