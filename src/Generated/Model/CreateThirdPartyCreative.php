<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateThirdPartyCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateThirdPartyCreative.
 */
final class CreateThirdPartyCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThirdPartyCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'thirdPartyDisplaySettings' => [
            'type' => 'model',
            'class' => CreateThirdPartyDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
        'thirdPartyVideoSettings' => [
            'type' => 'model',
            'class' => CreateThirdPartyVideoSettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the thirdPartyDisplaySettings value.
     *
     * @return CreateThirdPartyDisplaySettings|null
     */
    public function getThirdPartyDisplaySettings(): ?CreateThirdPartyDisplaySettings
    {
        /** @var CreateThirdPartyDisplaySettings|null $value */
        $value = $this->getAttribute('thirdPartyDisplaySettings');

        return $value;
    }

    /**
     * Sets the thirdPartyDisplaySettings value.
     *
     * @param CreateThirdPartyDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyDisplaySettings(CreateThirdPartyDisplaySettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyDisplaySettings', $value);

        return $this;
    }

    /**
     * Returns the thirdPartyVideoSettings value.
     *
     * @return CreateThirdPartyVideoSettings|null
     */
    public function getThirdPartyVideoSettings(): ?CreateThirdPartyVideoSettings
    {
        /** @var CreateThirdPartyVideoSettings|null $value */
        $value = $this->getAttribute('thirdPartyVideoSettings');

        return $value;
    }

    /**
     * Sets the thirdPartyVideoSettings value.
     *
     * @param CreateThirdPartyVideoSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyVideoSettings(CreateThirdPartyVideoSettings|array|null $value): self
    {
        $this->setAttribute('thirdPartyVideoSettings', $value);

        return $this;
    }
}
