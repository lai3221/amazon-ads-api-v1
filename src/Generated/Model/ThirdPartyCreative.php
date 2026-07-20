<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ThirdPartyCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ThirdPartyCreative.
 */
final class ThirdPartyCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ThirdPartyCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'thirdPartyDisplaySettings' => [
            'type' => 'model',
            'class' => ThirdPartyDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'thirdPartyVideoSettings' => [
            'type' => 'model',
            'class' => ThirdPartyVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the thirdPartyDisplaySettings value.
     *
     * @return ThirdPartyDisplaySettings|null
     */
    public function getThirdPartyDisplaySettings(): ?ThirdPartyDisplaySettings
    {
        /** @var ThirdPartyDisplaySettings|null $value */
        $value = $this->getAttribute('thirdPartyDisplaySettings');

        return $value;
    }

    /**
     * Sets the thirdPartyDisplaySettings value.
     *
     * @param ThirdPartyDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyDisplaySettings(ThirdPartyDisplaySettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyDisplaySettings', $value);

        return $this;
    }

    /**
     * Returns the thirdPartyVideoSettings value.
     *
     * @return ThirdPartyVideoSettings|null
     */
    public function getThirdPartyVideoSettings(): ?ThirdPartyVideoSettings
    {
        /** @var ThirdPartyVideoSettings|null $value */
        $value = $this->getAttribute('thirdPartyVideoSettings');

        return $value;
    }

    /**
     * Sets the thirdPartyVideoSettings value.
     *
     * @param ThirdPartyVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyVideoSettings(ThirdPartyVideoSettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyVideoSettings', $value);

        return $this;
    }
}
