<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateThirdPartyCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateThirdPartyCreative.
 */
final class UpdateThirdPartyCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateThirdPartyCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'thirdPartyDisplaySettings' => [
            'type' => 'model',
            'class' => UpdateThirdPartyDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'thirdPartyVideoSettings' => [
            'type' => 'model',
            'class' => UpdateThirdPartyVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the thirdPartyDisplaySettings value.
     *
     * @return UpdateThirdPartyDisplaySettings|null
     */
    public function getThirdPartyDisplaySettings(): ?UpdateThirdPartyDisplaySettings
    {
        /** @var UpdateThirdPartyDisplaySettings|null $value */
        $value = $this->getAttribute('thirdPartyDisplaySettings');

        return $value;
    }

    /**
     * Sets the thirdPartyDisplaySettings value.
     *
     * @param UpdateThirdPartyDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyDisplaySettings(UpdateThirdPartyDisplaySettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyDisplaySettings', $value);

        return $this;
    }

    /**
     * Returns the thirdPartyVideoSettings value.
     *
     * @return UpdateThirdPartyVideoSettings|null
     */
    public function getThirdPartyVideoSettings(): ?UpdateThirdPartyVideoSettings
    {
        /** @var UpdateThirdPartyVideoSettings|null $value */
        $value = $this->getAttribute('thirdPartyVideoSettings');

        return $value;
    }

    /**
     * Sets the thirdPartyVideoSettings value.
     *
     * @param UpdateThirdPartyVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyVideoSettings(UpdateThirdPartyVideoSettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyVideoSettings', $value);

        return $this;
    }
}
