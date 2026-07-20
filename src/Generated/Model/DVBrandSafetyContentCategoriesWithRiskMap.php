<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A map from content categories to risk level to exclude from targeting. Available keys are: [ADULT CONTENT, ALCOHOL, CRIME, DEATH INJURIES, DISASTER AVIATION, DISASTER MAN MADE, DISASTER NATURAL, DISASTER TERRORIST EVENTS, DISASTER VEHICLE, HATE SPEECH, PROF.
 *
 * @generated from Amazon Ads API v1 schema DVBrandSafetyContentCategoriesWithRiskMap.
 */
final class DVBrandSafetyContentCategoriesWithRiskMap extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DVBrandSafetyContentCategoriesWithRiskMap';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'key' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'value' => [
            'type' => 'enum',
            'class' => BrandSuitabilityRiskLevelType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Available keys are: [ADULT CONTENT, ALCOHOL, CRIME, DEATH INJURIES, DISASTER AVIATION, DISASTER MAN MADE, DISASTER NATURAL, DISASTER TERRORIST EVENTS, DISASTER VEHICLE, HATE SPEECH, PROFANITY, SUBSTANCE ABUSE, TOBACCO ECIGARETTES, VIOLENCE EXTREME GRAPHIC]..
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('key');

        return $value;
    }

    /**
     * Sets Available keys are: [ADULT CONTENT, ALCOHOL, CRIME, DEATH INJURIES, DISASTER AVIATION, DISASTER MAN MADE, DISASTER NATURAL, DISASTER TERRORIST EVENTS, DISASTER VEHICLE, HATE SPEECH, PROFANITY, SUBSTANCE ABUSE, TOBACCO ECIGARETTES, VIOLENCE EXTREME GRAPHIC]..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setKey(?string $value): self
    {
        $this->setAttribute('key', $value);

        return $this;
    }

    /**
     * Returns the value value.
     *
     * @return BrandSuitabilityRiskLevelType|null
     */
    public function getValue(): ?BrandSuitabilityRiskLevelType
    {
        /** @var BrandSuitabilityRiskLevelType|null $value */
        $value = $this->getAttribute('value');

        return $value;
    }

    /**
     * Sets the value value.
     *
     * @param BrandSuitabilityRiskLevelType|string|null $value New property value.
     * @return $this
     */
    public function setValue(BrandSuitabilityRiskLevelType|string|null $value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
