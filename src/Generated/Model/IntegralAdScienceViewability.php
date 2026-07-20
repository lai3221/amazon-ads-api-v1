<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The IAS viewability standard.
 *
 * @generated from Amazon Ads API v1 schema IntegralAdScienceViewability.
 */
final class IntegralAdScienceViewability extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IntegralAdScienceViewability';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'standard' => [
            'type' => 'enum',
            'class' => IASViewabilityStandardType::class,
            'required' => true,
            'nullable' => false,
        ],
        'viewabilityTargeting' => [
            'type' => 'enum',
            'class' => ViewabilityTierType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the standard value.
     *
     * @return IASViewabilityStandardType|null
     */
    public function getStandard(): ?IASViewabilityStandardType
    {
        /** @var IASViewabilityStandardType|null $value */
        $value = $this->getAttribute('standard');

        return $value;
    }

    /**
     * Sets the standard value.
     *
     * @param IASViewabilityStandardType|string|null $value New property value.
     * @return $this
     */
    public function setStandard(IASViewabilityStandardType|string|null $value): self
    {
        $this->setAttribute('standard', $value);

        return $this;
    }

    /**
     * Returns the viewabilityTargeting value.
     *
     * @return ViewabilityTierType|null
     */
    public function getViewabilityTargeting(): ?ViewabilityTierType
    {
        /** @var ViewabilityTierType|null $value */
        $value = $this->getAttribute('viewabilityTargeting');

        return $value;
    }

    /**
     * Sets the viewabilityTargeting value.
     *
     * @param ViewabilityTierType|string|null $value New property value.
     * @return $this
     */
    public function setViewabilityTargeting(ViewabilityTierType|string|null $value): self
    {
        $this->setAttribute('viewabilityTargeting', $value);

        return $this;
    }
}
