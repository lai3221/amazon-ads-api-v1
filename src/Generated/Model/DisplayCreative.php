<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DisplayCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DisplayCreative.
 */
final class DisplayCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DisplayCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'standardDisplaySettings' => [
            'type' => 'model',
            'class' => StandardDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the standardDisplaySettings value.
     *
     * @return StandardDisplaySettings|null
     */
    public function getStandardDisplaySettings(): ?StandardDisplaySettings
    {
        /** @var StandardDisplaySettings|null $value */
        $value = $this->getAttribute('standardDisplaySettings');

        return $value;
    }

    /**
     * Sets the standardDisplaySettings value.
     *
     * @param StandardDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStandardDisplaySettings(StandardDisplaySettings|array|null $value): self
    {
        $this->setAttribute('standardDisplaySettings', $value);

        return $this;
    }
}
